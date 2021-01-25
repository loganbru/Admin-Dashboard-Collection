import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import { Pagination } from "react-bootstrap";

let active = 2;
let items = [];
for (let number = 1; number <= 5; number++) {
  items.push(
    <Pagination.Item key={number} active={number === active}>
      {number}
    </Pagination.Item>
  );
}

const paginationBasic = (
  <div>
    <Pagination>{items}</Pagination>
    <br />

    <Pagination size="lg">{items}</Pagination>
    <br />

    <Pagination size="sm">{items}</Pagination>
  </div>
);

export default class PaginationExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          <p>A set of presentational components for building pagination UI.</p>
          <p>
            For more info please check the components's official{" "}
            <a
              target="_blank"
              className="kt-link"
              rel="noopener noreferrer"
              href="https://react-bootstrap.github.io/components/pagination/"
            >
              demos & documentation
            </a>
          </p>
        </Notice>

        <CodeExample jsCode={jsCode1} beforeCodeTitle="Basic Example">
          <div className="kt-section">
            <span className="kt-section__sub"></span>
            {paginationBasic}
          </div>
        </CodeExample>

        <CodeExample jsCode={jsCode2} beforeCodeTitle="More options">
          <div className="kt-section">
            <span className="kt-section__sub">
              For building more complex pagination UI, there are few convenient
              sub-components for adding "First", "Previous", "Next", and "Last"
              buttons, as well as an <code>Ellipsis</code> item for indicating
              previous or continuing results.
            </span>
            <div className="kt-separator kt-separator--dashed"></div>
            <Pagination>
              <Pagination.First />
              <Pagination.Prev />
              <Pagination.Item>{1}</Pagination.Item>
              <Pagination.Ellipsis />

              <Pagination.Item>{10}</Pagination.Item>
              <Pagination.Item>{11}</Pagination.Item>
              <Pagination.Item active>{12}</Pagination.Item>
              <Pagination.Item>{13}</Pagination.Item>
              <Pagination.Item disabled>{14}</Pagination.Item>

              <Pagination.Ellipsis />
              <Pagination.Item>{20}</Pagination.Item>
              <Pagination.Next />
              <Pagination.Last />
            </Pagination>
          </div>
        </CodeExample>
      </>
    );
  }
}

const jsCode1 = `
let active = 2;
let items = [];
for (let number = 1; number <= 5; number++) {
  items.push(
    <Pagination.Item key={number} active={number === active}>
      {number}
    </Pagination.Item>,
  );
}

const paginationBasic = (
  <div>
    <Pagination>{items}</Pagination>
    <br />

    <Pagination size="lg">{items}</Pagination>
    <br />

    <Pagination size="sm">{items}</Pagination>
  </div>
);

render(paginationBasic);
`;
const jsCode2 = `
<Pagination>
  <Pagination.First />
  <Pagination.Prev />
  <Pagination.Item>{1}</Pagination.Item>
  <Pagination.Ellipsis />

  <Pagination.Item>{10}</Pagination.Item>
  <Pagination.Item>{11}</Pagination.Item>
  <Pagination.Item active>{12}</Pagination.Item>
  <Pagination.Item>{13}</Pagination.Item>
  <Pagination.Item disabled>{14}</Pagination.Item>

  <Pagination.Ellipsis />
  <Pagination.Item>{20}</Pagination.Item>
  <Pagination.Next />
  <Pagination.Last />
</Pagination>
`;
