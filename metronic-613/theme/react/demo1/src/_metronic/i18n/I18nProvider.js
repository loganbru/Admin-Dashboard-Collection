import React from "react";
import { useSelector } from "react-redux";
import { addLocaleData, IntlProvider } from "react-intl";

import * as de from "react-intl/locale-data/de";
import * as en from "react-intl/locale-data/en";
import * as es from "react-intl/locale-data/es";
import * as fr from "react-intl/locale-data/fr";
import * as ja from "react-intl/locale-data/ja";
import * as zh from "react-intl/locale-data/zh";

import deMessages from "./messages/de";
import enMessages from "./messages/en";
import esMessages from "./messages/es";
import frMessages from "./messages/fr";
import jaMessages from "./messages/ja";
import zhMessages from "./messages/zh";

const allMessages = {
  de: deMessages,
  en: enMessages,
  es: esMessages,
  fr: frMessages,
  ja: jaMessages,
  zh: zhMessages
};

addLocaleData([...de, ...en, ...es, ...fr, ...ja, ...zh]);

export default function I18nProvider({ children }) {
  const locale = useSelector(({ i18n }) => i18n.lang);
  const messages = allMessages[locale];

  return (
      <IntlProvider locale={locale} messages={messages}>
        {children}
      </IntlProvider>
  );
}
