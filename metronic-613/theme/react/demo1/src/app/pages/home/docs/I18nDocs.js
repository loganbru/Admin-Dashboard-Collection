import React from "react";
import {
  Portlet,
  PortletBody,
  PortletHeader
} from "../../../partials/content/Portlet";
import { CodeBlock } from "../../../partials/content/CodeExample";

export default function I18nDocs() {
  return (
    <Portlet>
      <PortletHeader title="Internationalization (i18n)" />
      <PortletBody>
        <h3 id="overview">Overview</h3>
        <p>
          We're using <code>react-intl</code> for internationalization, check
          official{" "}
          <a href="https://github.com/formatjs/react-intl/blob/master/docs/Getting-Started.md">
            documentation
          </a>{" "}
          and{" "}
          <a href="https://github.com/formatjs/react-intl/tree/master/examples">
            examples
          </a>
          .
        </p>

        <h3 id="how-to-add-a-new-language">How to add a new language</h3>
        <p>
          <strong>
            Note: if there are no locale data for your new language in{" "}
            <code>react-intl/locale-data</code> you will have to manually add
            locale data
          </strong>
        </p>

        <h5>This is example how to add Turkish language:</h5>

        <ol>
          <li>
            <p>
              Update <code>src/app/partials/layout/LanguageSelector.js</code>
            </p>

            <CodeBlock
              language="diff"
              code={`
                const languages = [
                  {
                    lang: "en",
                    name: "English",
                    flag: toAbsoluteUrl("/media/flags/012-uk.svg")
                  },
                + {
                +   lang: "tr",
                +   name: "Turkish",
                +   flag: toAbsoluteUrl("/media/flags/006-turkey.svg")
                + },
                {
              `}
            />
          </li>
          <li>
            <p>
              Add <code>src/_metronic/i18n/messages/tr.json</code>
            </p>

            <CodeBlock
              language="diff"
              code={`
                + {
                +    "TRANSLATOR.SELECT": "Dilinizi seçin",
                +    "MENU.NEW": "yeni",
                +    "MENU.ACTIONS": "Eylemler",
                +    "MENU.CREATE_POST": "Yeni Gönderi Oluştur",
              `}
            />
          </li>

          <li>
            <p>
              Register messages and locale data in{" "}
              <code>src/_metronic/i18n/I18nProvider.js</code>
            </p>

            <CodeBlock
              language="diff"
              code={`
                import * as ja from "react-intl/locale-data/ja";
                import * as zh from "react-intl/locale-data/zh";
                + import * as tr from "react-intl/locale-data/tr";
                
                import deMessages from "./messages/de";
                import enMessages from "./messages/en";
                import esMessages from "./messages/es";
                import frMessages from "./messages/fr";
                import jaMessages from "./messages/ja";
                import zhMessages from "./messages/zh";
                + import trMessages from "./messages/tr";
                
                const allMessages = {
                  de: deMessages,
                  en: enMessages,
                  es: esMessages,
                  fr: frMessages,
                  ja: jaMessages,
                  zh: zhMessages
                + tr: trMessages
                };
                
                - addLocaleData([...de, ...en, ...es, ...fr, ...ja, ...zh]);
                + addLocaleData([...de, ...en, ...es, ...fr, ...ja, ...zh, ...tr]);
                
                export default function I18nProvider({ children }) {
              `}
            />
          </li>
        </ol>

        <h4 id="how-to-use">How to use</h4>

        <p>
          In the sample React app demo, the core parts like{" "}
          <code>left sided menu</code>, <code>topbar horizontal menu</code>,
          etc. are already implemented with the translation.
        </p>
        <p>
          The translator understands flat JSON object as defined in{" "}
          <code>src/_metronic/i18n/messages/en.json</code>. This means that you
          can have a translation that looks like this:
        </p>

        <ol>
          <li>
            Add translation to <code>src/app/i18n/en.json</code>:
            <CodeBlock
              language="json"
              code={`
                {
                  "HOME.HELLO": "Hello, {name}!"
                }
              `}
            />
          </li>

          <li>
            <p>Format it with component:</p>
            <CodeBlock
              language="jsx"
              code={`
                import { FormattedMessage } from "react-intl";
                
                export default function Hello({ name }) {
                  return <FormattedMessage id="HOME.HELLO" values={{ name }} />;
                }
              `}
            />
            <p>Or with hook:</p>
            <CodeBlock
              language="jsx"
              code={`
                import { useIntl } from "react-intl";
                
                export default function Hello({ name }) {
                  const intl = useIntl();
                
                  return <h3>{intl.formatMessage({ id: "HOME.HELLO" }, { name })}</h3>;
                }
              `}
            />{" "}
            <p>Or with HOC (Higher order component):</p>
            <CodeBlock
              language="jsx"
              code={`
                import { injectIntl } from "react-intl";
                
                function Hello({ name, intl /* Prop injected with \`injectIntl\` */ }) {
                  return <h3>{intl.formatMessage({ id: "HOME.HELLO" }, { name })}</h3>;
                }
                
                export default injectIntl(Hello);
              `}
            />
          </li>
        </ol>
      </PortletBody>
    </Portlet>
  );
}
