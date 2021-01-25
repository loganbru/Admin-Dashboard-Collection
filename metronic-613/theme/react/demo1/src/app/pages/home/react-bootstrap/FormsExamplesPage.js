import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import { Button, Form, InputGroup, Col, Row } from "react-bootstrap";

class FormExample extends React.Component {
  constructor(...args) {
    super(...args);

    this.state = { validated: false };
  }

  handleSubmit(event) {
    const form = event.currentTarget;
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    this.setState({ validated: true });
  }

  render() {
    const { validated } = this.state;
    return (
      <Form
        noValidate
        validated={validated}
        onSubmit={e => this.handleSubmit(e)}
      >
        <Form.Row>
          <Form.Group as={Col} md="4" controlId="validationCustom01">
            <Form.Label>First name</Form.Label>
            <Form.Control
              required
              type="text"
              placeholder="First name"
              defaultValue="Mark"
            />
            <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="4" controlId="validationCustom02">
            <Form.Label>Last name</Form.Label>
            <Form.Control
              required
              type="text"
              placeholder="Last name"
              defaultValue="Otto"
            />
            <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="4" controlId="validationCustomUsername">
            <Form.Label>Username</Form.Label>
            <InputGroup>
              <InputGroup.Prepend>
                <InputGroup.Text id="inputGroupPrepend">@</InputGroup.Text>
              </InputGroup.Prepend>
              <Form.Control
                type="text"
                placeholder="Username"
                aria-describedby="inputGroupPrepend"
                required
              />
              <Form.Control.Feedback type="invalid">
                Please choose a username.
              </Form.Control.Feedback>
            </InputGroup>
          </Form.Group>
        </Form.Row>
        <Form.Row>
          <Form.Group as={Col} md="6" controlId="validationCustom03">
            <Form.Label>City</Form.Label>
            <Form.Control type="text" placeholder="City" required />
            <Form.Control.Feedback type="invalid">
              Please provide a valid city.
            </Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="3" controlId="validationCustom04">
            <Form.Label>State</Form.Label>
            <Form.Control type="text" placeholder="State" required />
            <Form.Control.Feedback type="invalid">
              Please provide a valid state.
            </Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="3" controlId="validationCustom05">
            <Form.Label>Zip</Form.Label>
            <Form.Control type="text" placeholder="Zip" required />
            <Form.Control.Feedback type="invalid">
              Please provide a valid zip.
            </Form.Control.Feedback>
          </Form.Group>
        </Form.Row>
        <Form.Group>
          <Form.Check
            required
            label="Agree to terms and conditions"
            feedback="You must agree before submitting."
          />
        </Form.Group>
        <Button type="submit">Submit form</Button>
      </Form>
    );
  }
}

// const { Formik } = formik;

// const schema = yup.object({
//   firstName: yup.string().required(),
//   lastName: yup.string().required(),
//   username: yup.string().required(),
//   city: yup.string().required(),
//   state: yup.string().required(),
//   zip: yup.string().required(),
//   terms: yup.bool().required(),
// });

// function FormExample1() {
//   return (
//     <Formik
//       validationSchema={schema}
//       onSubmit={console.log}
//       initialValues={{
//         firstName: 'Mark',
//         lastName: 'Otto',
//       }}
//     >
//       {({
//         handleSubmit,
//         handleChange,
//         handleBlur,
//         values,
//         touched,
//         isValid,
//         errors,
//       }) => (
//         <Form noValidate onSubmit={handleSubmit}>
//           <Form.Row>
//             <Form.Group as={Col} md="4" controlId="validationFormik01">
//               <Form.Label>First name</Form.Label>
//               <Form.Control
//                 type="text"
//                 name="firstName"
//                 value={values.firstName}
//                 onChange={handleChange}
//                 isValid={touched.firstName && !errors.firstName}
//               />
//               <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
//             </Form.Group>
//             <Form.Group as={Col} md="4" controlId="validationFormik02">
//               <Form.Label>Last name</Form.Label>
//               <Form.Control
//                 type="text"
//                 name="lastName"
//                 value={values.lastName}
//                 onChange={handleChange}
//                 isValid={touched.firstName && !errors.lastName}
//               />

//               <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
//             </Form.Group>
//             <Form.Group as={Col} md="4" controlId="validationFormikUsername">
//               <Form.Label>Username</Form.Label>
//               <InputGroup>
//                 <InputGroup.Prepend>
//                   <InputGroup.Text id="inputGroupPrepend">@</InputGroup.Text>
//                 </InputGroup.Prepend>
//                 <Form.Control
//                   type="text"
//                   placeholder="Username"
//                   aria-describedby="inputGroupPrepend"
//                   name="username"
//                   value={values.username}
//                   onChange={handleChange}
//                   isInvalid={!!errors.username}
//                 />
//                 <Form.Control.Feedback type="invalid">
//                   {errors.username}
//                 </Form.Control.Feedback>
//               </InputGroup>
//             </Form.Group>
//           </Form.Row>
//           <Form.Row>
//             <Form.Group as={Col} md="6" controlId="validationFormik03">
//               <Form.Label>City</Form.Label>
//               <Form.Control
//                 type="text"
//                 placeholder="City"
//                 name="city"
//                 value={values.city}
//                 onChange={handleChange}
//                 isInvalid={!!errors.city}
//               />

//               <Form.Control.Feedback type="invalid">
//                 {errors.city}
//               </Form.Control.Feedback>
//             </Form.Group>
//             <Form.Group as={Col} md="3" controlId="validationFormik04">
//               <Form.Label>State</Form.Label>
//               <Form.Control
//                 type="text"
//                 placeholder="State"
//                 name="state"
//                 value={values.state}
//                 onChange={handleChange}
//                 isInvalid={!!errors.state}
//               />
//               <Form.Control.Feedback type="invalid">
//                 {errors.state}
//               </Form.Control.Feedback>
//             </Form.Group>
//             <Form.Group as={Col} md="3" controlId="validationFormik05">
//               <Form.Label>Zip</Form.Label>
//               <Form.Control
//                 type="text"
//                 placeholder="Zip"
//                 name="zip"
//                 value={values.zip}
//                 onChange={handleChange}
//                 isInvalid={!!errors.zip}
//               />

//               <Form.Control.Feedback type="invalid">
//                 {errors.zip}
//               </Form.Control.Feedback>
//             </Form.Group>
//           </Form.Row>
//           <Form.Group>
//             <Form.Check
//               required
//               name="terms"
//               label="Agree to terms and conditions"
//               onChange={handleChange}
//               isInvalid={!!errors.terms}
//               feedback={errors.terms}
//               id="validationFormik0"
//             />
//           </Form.Group>
//           <Button type="submit">Submit form</Button>
//         </Form>
//       )}
//     </Formik>
//   );
// }

export default class FormsExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://react-bootstrap.github.io/components/forms/"
          >
            demos & documentation
          </a>
        </Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode1} beforeCodeTitle="Basic Example">
              <div className="kt-section">
                <span className="kt-section__sub">
                  The <code>&lt;FormControl&gt;</code> component renders a form
                  control with Bootstrap styling. The{" "}
                  <code>&lt;FormGroup&gt;</code> component wraps a form control
                  with proper spacing, along with support for a label, help
                  text, and validation state. To ensure accessibility, set
                  controlId on <code>&lt;FormGroup&gt;</code>, and use{" "}
                  <code>&lt;FormLabel&gt;</code> for the label.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  <Form.Group controlId="formBasicEmail">
                    <Form.Label>Email address</Form.Label>
                    <Form.Control type="email" placeholder="Enter email" />
                    <Form.Text className="text-muted">
                      We'll never share your email with anyone else.
                    </Form.Text>
                  </Form.Group>

                  <Form.Group controlId="formBasicPassword">
                    <Form.Label>Password</Form.Label>
                    <Form.Control type="password" placeholder="Password" />
                  </Form.Group>
                  <Form.Group controlId="formBasicChecbox">
                    <Form.Check type="checkbox" label="Check me out" />
                  </Form.Group>
                  <Button variant="primary" type="submit">
                    Submit
                  </Button>
                </Form>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode2} beforeCodeTitle="Form controls">
              <div className="kt-section">
                <span className="kt-section__sub">
                  For textual form controls—like <code>input</code>s,{" "}
                  <code>select</code>s, and <code>textarea</code>s—use the
                  FormControl component. FormControl adds some additional styles
                  for general appearance, focus state, sizing, and more.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  <Form.Group controlId="exampleForm.ControlInput1">
                    <Form.Label>Email address</Form.Label>
                    <Form.Control type="email" placeholder="name@example.com" />
                  </Form.Group>
                  <Form.Group controlId="exampleForm.ControlSelect1">
                    <Form.Label>Example select</Form.Label>
                    <Form.Control as="select">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </Form.Control>
                  </Form.Group>
                  <Form.Group controlId="exampleForm.ControlSelect2">
                    <Form.Label>Example multiple select</Form.Label>
                    <Form.Control as="select" multiple>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </Form.Control>
                  </Form.Group>
                  <Form.Group controlId="exampleForm.ControlTextarea1">
                    <Form.Label>Example textarea</Form.Label>
                    <Form.Control as="textarea" rows="3" />
                  </Form.Group>
                </Form>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode3} beforeCodeTitle="Sizing">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Use <code>size</code> on <code>&lt;FormControl&gt;</code> to
                  change the size of inputs.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <>
                  <Form.Control
                    size="lg"
                    type="text"
                    placeholder="Large text"
                  />
                  <br />
                  <Form.Control type="text" placeholder="Normal text" />
                  <br />
                  <Form.Control
                    size="sm"
                    type="text"
                    placeholder="Small text"
                  />
                </>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode4} beforeCodeTitle="Plaintext">
              <div className="kt-section">
                <span className="kt-section__sub">
                  If you want to have elements in your form styled as plain
                  text, use the <code>plaintext</code> prop on FormControls to
                  remove the default form field styling and preserve the correct
                  margin and padding.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  <Form.Group as={Row} controlId="formPlaintextEmail">
                    <Form.Label column sm="2">
                      Email
                    </Form.Label>
                    <Col sm="10">
                      <Form.Control
                        plaintext
                        readOnly
                        defaultValue="email@example.com"
                      />
                    </Col>
                  </Form.Group>

                  <Form.Group as={Row} controlId="formPlaintextPassword">
                    <Form.Label column sm="2">
                      Password
                    </Form.Label>
                    <Col sm="10">
                      <Form.Control type="password" placeholder="Password" />
                    </Col>
                  </Form.Group>
                </Form>
              </div>
            </CodeExample>
          </div>
        </div>

        <Notice className="notice__paragraph">Checkboxes and Radios</Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode5} beforeCodeTitle="Default (stacked)">
              <div className="kt-section">
                <span className="kt-section__sub">
                  By default, any number of checkboxes and radios that are
                  immediate sibling will be vertically stacked and appropriately
                  spaced with FormCheck.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  {["checkbox", "radio"].map(type => (
                    <div key={`default-${type}`} className="mb-3">
                      <Form.Check
                        type={type}
                        id={`default-${type}`}
                        label={`default ${type}`}
                      />

                      <Form.Check
                        disabled
                        type={type}
                        label={`disabled ${type}`}
                        id={`disabled-default-${type}`}
                      />
                    </div>
                  ))}
                </Form>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode6} beforeCodeTitle="Inline">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Group checkboxes or radios on the same horizontal row by
                  adding the <code>inline</code> prop.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  {["checkbox", "radio"].map(type => (
                    <div key={`inline-${type}`} className="mb-3">
                      <Form.Check
                        inline
                        label="1"
                        type={type}
                        id={`inline-${type}-1`}
                      />
                      <Form.Check
                        inline
                        label="2"
                        type={type}
                        id={`inline-${type}-2`}
                      />
                      <Form.Check
                        inline
                        disabled
                        label="3 (disabled)"
                        type={type}
                        id={`inline-${type}-3`}
                      />
                    </div>
                  ))}
                </Form>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode7} beforeCodeTitle="Without labels">
              <div className="kt-section">
                <span className="kt-section__sub">
                  When you render a FormCheck without a label (no{" "}
                  <code>children</code>) some additional styling is applied to
                  keep the inputs from collapsing.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <>
                  <Form.Check aria-label="option 1" />
                  <Form.Check type="radio" aria-label="radio 1" />
                </>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode8}
              beforeCodeTitle="Customizing FormCheck rendering"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  When you need tighter control, or want to customize how the{" "}
                  <code>FormCheck</code> component renders, it may better to use
                  it's constituent parts directly.
                </span>
                <p className="kt-section__sub">
                  By provided <code>children</code> to the{" "}
                  <code>FormCheck</code> you can forgo the default rendering and
                  handle it yourself.
                </p>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  {["checkbox", "radio"].map(type => (
                    <div key={type} className="mb-3">
                      <Form.Check type={type} id={`check-api-${type}`}>
                        <Form.Check.Input type={type} isValid />
                        <Form.Check.Label>{`Custom api ${type}`}</Form.Check.Label>
                        <Form.Control.Feedback type="valid">
                          You did it!
                        </Form.Control.Feedback>
                      </Form.Check>
                    </div>
                  ))}
                </Form>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode9} beforeCodeTitle="Form group">
              <div className="kt-section">
                <span className="kt-section__sub">
                  The <code>FormGroup</code> component is the easiest way to add
                  some structure to forms. It provides a flexible container for
                  grouping of labels, controls, optional help text, and form
                  validation messaging.
                </span>
                <p className="kt-section__sub">
                  You also add the <code>controlId</code> prop to accessibly
                  wire the nested label and input together via the{" "}
                  <code>id</code>.
                </p>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  <Form.Group controlId="formGroupEmail">
                    <Form.Label>Email address</Form.Label>
                    <Form.Control type="email" placeholder="Enter email" />
                  </Form.Group>
                  <Form.Group controlId="formGroupPassword">
                    <Form.Label>Password</Form.Label>
                    <Form.Control type="password" placeholder="Password" />
                  </Form.Group>
                </Form>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode10} beforeCodeTitle="Form grid">
              <div className="kt-section">
                <span className="kt-section__sub">
                  More complex forms can be built using the grid components. Use
                  these for form layouts that require multiple columns, varied
                  widths, and additional alignment options.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  <Row>
                    <Col>
                      <Form.Control placeholder="First name" />
                    </Col>
                    <Col>
                      <Form.Control placeholder="Last name" />
                    </Col>
                  </Row>
                </Form>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode11} beforeCodeTitle="Form row">
              <div className="kt-section">
                <span className="kt-section__sub">
                  You may also swap <code>&lt;Row&gt;</code> for{" "}
                  <code>&lt;Form.Row&gt;</code>, a variation of the standard
                  grid row that overrides the default column gutters for tighter
                  and more compact layouts.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  <Form.Row>
                    <Form.Group as={Col} controlId="formGridEmail">
                      <Form.Label>Email</Form.Label>
                      <Form.Control type="email" placeholder="Enter email" />
                    </Form.Group>

                    <Form.Group as={Col} controlId="formGridPassword">
                      <Form.Label>Password</Form.Label>
                      <Form.Control type="password" placeholder="Password" />
                    </Form.Group>
                  </Form.Row>

                  <Form.Group controlId="formGridAddress1">
                    <Form.Label>Address</Form.Label>
                    <Form.Control placeholder="1234 Main St" />
                  </Form.Group>

                  <Form.Group controlId="formGridAddress2">
                    <Form.Label>Address 2</Form.Label>
                    <Form.Control placeholder="Apartment, studio, or floor" />
                  </Form.Group>

                  <Form.Row>
                    <Form.Group as={Col} controlId="formGridCity">
                      <Form.Label>City</Form.Label>
                      <Form.Control />
                    </Form.Group>

                    <Form.Group as={Col} controlId="formGridState">
                      <Form.Label>State</Form.Label>
                      <Form.Control as="select">
                        <option>Choose...</option>
                        <option>...</option>
                      </Form.Control>
                    </Form.Group>

                    <Form.Group as={Col} controlId="formGridZip">
                      <Form.Label>Zip</Form.Label>
                      <Form.Control />
                    </Form.Group>
                  </Form.Row>

                  <Form.Group id="formGridCheckbox">
                    <Form.Check type="checkbox" label="Check me out" />
                  </Form.Group>

                  <Button variant="primary" type="submit">
                    Submit
                  </Button>
                </Form>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode12} beforeCodeTitle="Horizontal forms">
              <div className="kt-section">
                <span className="kt-section__sub">
                  You may also swap <code>&lt;Row&gt;</code> for{" "}
                  <code>&lt;Form.Row&gt;</code>, a variation of the standard
                  grid row that overrides the default column gutters for tighter
                  and more compact layouts.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  <Form.Group as={Row} controlId="formHorizontalEmail">
                    <Form.Label column sm={2}>
                      Email
                    </Form.Label>
                    <Col sm={10}>
                      <Form.Control type="email" placeholder="Email" />
                    </Col>
                  </Form.Group>

                  <Form.Group as={Row} controlId="formHorizontalPassword">
                    <Form.Label column sm={2}>
                      Password
                    </Form.Label>
                    <Col sm={10}>
                      <Form.Control type="password" placeholder="Password" />
                    </Col>
                  </Form.Group>
                  <fieldset>
                    <Form.Group as={Row}>
                      <Form.Label as="legend" column sm={2}>
                        Radios
                      </Form.Label>
                      <Col sm={10}>
                        <Form.Check
                          type="radio"
                          label="first radio"
                          name="formHorizontalRadios"
                          id="formHorizontalRadios1"
                        />
                        <Form.Check
                          type="radio"
                          label="second radio"
                          name="formHorizontalRadios"
                          id="formHorizontalRadios2"
                        />
                        <Form.Check
                          type="radio"
                          label="third radio"
                          name="formHorizontalRadios"
                          id="formHorizontalRadios3"
                        />
                      </Col>
                    </Form.Group>
                  </fieldset>
                  <Form.Group as={Row} controlId="formHorizontalCheck">
                    <Col sm={{ span: 10, offset: 2 }}>
                      <Form.Check label="Remember me" />
                    </Col>
                  </Form.Group>

                  <Form.Group as={Row}>
                    <Col sm={{ span: 10, offset: 2 }}>
                      <Button type="submit">Sign in</Button>
                    </Col>
                  </Form.Group>
                </Form>
              </div>
            </CodeExample>
          </div>
        </div>

        <Notice className="notice__paragraph">Validation</Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode13}
              beforeCodeTitle="Native HTML5 form validation"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  For native HTML form validation–available in all our supported
                  browsers, the <code>:valid</code> and <code>:invalid</code>{" "}
                  pseudo selectors are used to apply validation styles as well
                  as display feedback messages.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <FormExample />
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode14}
              beforeCodeTitle="Form libraries and server rendered styles."
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  It's often beneficial (especially in React) to handle form
                  validation via a library like Formik, or react-formal. In
                  those cases, <code>isValid</code> and <code>isInvalid</code>{" "}
                  props can be added to form controls to manually apply
                  validation styles.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                {/* <FormExample1 /> */}
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode15}
              beforeCodeTitle="Checkboxes and radios"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  Custom checkbox and radio styles are achieved with a
                  resourceful use of the <code>:checked</code> selector and{" "}
                  <code>:after</code> psuedo elements, but are Structurally
                  similar to the default <code>FormCheck</code>.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Form>
                  {["checkbox", "radio"].map(type => (
                    <div key={`custom-${type}`} className="mb-3">
                      <Form.Check
                        custom
                        type={type}
                        id={`custom-${type}`}
                        label={`Check this custom ${type}`}
                      />

                      <Form.Check
                        custom
                        disabled
                        type={type}
                        label={`disabled ${type}`}
                        id={`disabled-custom-${type}`}
                      />
                    </div>
                  ))}
                </Form>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode16} beforeCodeTitle="Inline">
              <div className="kt-section">
                <span className="kt-section__sub"></span>
                <Form>
                  {["checkbox", "radio"].map(type => (
                    <div key={`custom-inline-${type}`} className="mb-3">
                      <Form.Check
                        custom
                        inline
                        label="1"
                        type={type}
                        id={`custom-inline-${type}-1`}
                      />
                      <Form.Check
                        custom
                        inline
                        label="2"
                        type={type}
                        id={`custom-inline-${type}-2`}
                      />
                      <Form.Check
                        custom
                        inline
                        disabled
                        label="3 (disabled)"
                        type={type}
                        id={`custom-inline-${type}-3`}
                      />
                    </div>
                  ))}
                </Form>
              </div>
            </CodeExample>
          </div>
        </div>
      </>
    );
  }
}

const jsCode1 = `
<Form>
  <Form.Group controlId="formBasicEmail">
    <Form.Label>Email address</Form.Label>
    <Form.Control type="email" placeholder="Enter email" />
    <Form.Text className="text-muted">
      We'll never share your email with anyone else.
    </Form.Text>
  </Form.Group>

  <Form.Group controlId="formBasicPassword">
    <Form.Label>Password</Form.Label>
    <Form.Control type="password" placeholder="Password" />
  </Form.Group>
  <Form.Group controlId="formBasicChecbox">
    <Form.Check type="checkbox" label="Check me out" />
  </Form.Group>
  <Button variant="primary" type="submit">
    Submit
  </Button>
</Form>
`;
const jsCode2 = `
<Form>
  <Form.Group controlId="exampleForm.ControlInput1">
    <Form.Label>Email address</Form.Label>
    <Form.Control type="email" placeholder="name@example.com" />
  </Form.Group>
  <Form.Group controlId="exampleForm.ControlSelect1">
    <Form.Label>Example select</Form.Label>
    <Form.Control as="select">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </Form.Control>
  </Form.Group>
  <Form.Group controlId="exampleForm.ControlSelect2">
    <Form.Label>Example multiple select</Form.Label>
    <Form.Control as="select" multiple>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </Form.Control>
  </Form.Group>
  <Form.Group controlId="exampleForm.ControlTextarea1">
    <Form.Label>Example textarea</Form.Label>
    <Form.Control as="textarea" rows="3" />
  </Form.Group>
</Form>
`;
const jsCode3 = `
<>
  <Form.Control size="lg" type="text" placeholder="Large text" />
  <br />
  <Form.Control type="text" placeholder="Normal text" />
  <br />
  <Form.Control size="sm" type="text" placeholder="Small text" />
</>
`;
const jsCode4 = `
<Form>
  <Form.Group as={Row} controlId="formPlaintextEmail">
    <Form.Label column sm="2">
      Email
    </Form.Label>
    <Col sm="10">
      <Form.Control plaintext readOnly defaultValue="email@example.com" />
    </Col>
  </Form.Group>

  <Form.Group as={Row} controlId="formPlaintextPassword">
    <Form.Label column sm="2">
      Password
    </Form.Label>
    <Col sm="10">
      <Form.Control type="password" placeholder="Password" />
    </Col>
  </Form.Group>
</Form>
`;
const jsCode5 = `
<Form>
  {['checkbox', 'radio'].map(type => (
    <div key={\`default-\${type}\`} className="mb-3">
      <Form.Check 
        type={type}
        id={\`default-\${type}\`}
        label={\`default \${type}\`}
      />

      <Form.Check
        disabled
        type={type}
        label={\`disabled \${type}\`}
        id={\`disabled-default-\${type}\`}
      />
    </div>
  ))}
</Form>
`;
const jsCode6 = `
<Form>
  {['checkbox', 'radio'].map(type => (
    <div key={\`inline-\${type}\`} className="mb-3">
      <Form.Check inline label="1" type={type} id={\`inline-\${type}-1\`} />
      <Form.Check inline label="2" type={type} id={\`inline-\${type}-2\`} />
      <Form.Check
        inline
        disabled
        label="3 (disabled)"
        type={type}
        id={\`inline-\${type}-3\`}
      />
    </div>
  ))}
</Form>
`;
const jsCode7 = `
<>
  <Form.Check aria-label="option 1" />
  <Form.Check type="radio" aria-label="radio 1" />
</>
`;
const jsCode8 = `
<Form>
  {['checkbox', 'radio'].map(type => (
    <div key={type} className="mb-3">
      <Form.Check type={type} id={\`check-api-\${type}\`}>
        <Form.Check.Input type={type} isValid />
        <Form.Check.Label>{\`Custom api \${type}\`}</Form.Check.Label>
        <Form.Control.Feedback type="valid">You did it!</Form.Control.Feedback>
      </Form.Check>
    </div>
  ))}
</Form>
`;
const jsCode9 = `
<Form>
  <Form.Group controlId="formGroupEmail">
    <Form.Label>Email address</Form.Label>
    <Form.Control type="email" placeholder="Enter email" />
  </Form.Group>
  <Form.Group controlId="formGroupPassword">
    <Form.Label>Password</Form.Label>
    <Form.Control type="password" placeholder="Password" />
  </Form.Group>
</Form>
`;
const jsCode10 = `
<Form>
  <Row>
    <Col>
      <Form.Control placeholder="First name" />
    </Col>
    <Col>
      <Form.Control placeholder="Last name" />
    </Col>
  </Row>
</Form>
`;
const jsCode11 = `
<Form>
  <Form.Row>
    <Form.Group as={Col} controlId="formGridEmail">
      <Form.Label>Email</Form.Label>
      <Form.Control type="email" placeholder="Enter email" />
    </Form.Group>

    <Form.Group as={Col} controlId="formGridPassword">
      <Form.Label>Password</Form.Label>
      <Form.Control type="password" placeholder="Password" />
    </Form.Group>
  </Form.Row>

  <Form.Group controlId="formGridAddress1">
    <Form.Label>Address</Form.Label>
    <Form.Control placeholder="1234 Main St" />
  </Form.Group>

  <Form.Group controlId="formGridAddress2">
    <Form.Label>Address 2</Form.Label>
    <Form.Control placeholder="Apartment, studio, or floor" />
  </Form.Group>

  <Form.Row>
    <Form.Group as={Col} controlId="formGridCity">
      <Form.Label>City</Form.Label>
      <Form.Control />
    </Form.Group>

    <Form.Group as={Col} controlId="formGridState">
      <Form.Label>State</Form.Label>
      <Form.Control as="select">
        <option>Choose...</option>
        <option>...</option>
      </Form.Control>
    </Form.Group>

    <Form.Group as={Col} controlId="formGridZip">
      <Form.Label>Zip</Form.Label>
      <Form.Control />
    </Form.Group>
  </Form.Row>

  <Form.Group id="formGridCheckbox">
    <Form.Check type="checkbox" label="Check me out" />
  </Form.Group>

  <Button variant="primary" type="submit">
    Submit
  </Button>
</Form>
`;
const jsCode12 = `
<Form>
  <Form.Group as={Row} controlId="formHorizontalEmail">
    <Form.Label column sm={2}>
      Email
    </Form.Label>
    <Col sm={10}>
      <Form.Control type="email" placeholder="Email" />
    </Col>
  </Form.Group>

  <Form.Group as={Row} controlId="formHorizontalPassword">
    <Form.Label column sm={2}>
      Password
    </Form.Label>
    <Col sm={10}>
      <Form.Control type="password" placeholder="Password" />
    </Col>
  </Form.Group>
  <fieldset>
    <Form.Group as={Row}>
      <Form.Label as="legend" column sm={2}>
        Radios
      </Form.Label>
      <Col sm={10}>
        <Form.Check
          type="radio"
          label="first radio"
          name="formHorizontalRadios"
          id="formHorizontalRadios1"
        />
        <Form.Check
          type="radio"
          label="second radio"
          name="formHorizontalRadios"
          id="formHorizontalRadios2"
        />
        <Form.Check
          type="radio"
          label="third radio"
          name="formHorizontalRadios"
          id="formHorizontalRadios3"
        />
      </Col>
    </Form.Group>
  </fieldset>
  <Form.Group as={Row} controlId="formHorizontalCheck">
    <Col sm={{ span: 10, offset: 2 }}>
      <Form.Check label="Remember me" />
    </Col>
  </Form.Group>

  <Form.Group as={Row}>
    <Col sm={{ span: 10, offset: 2 }}>
      <Button type="submit">Sign in</Button>
    </Col>
  </Form.Group>
</Form>
`;
const jsCode13 = `
class FormExample extends React.Component {
  constructor(...args) {
    super(...args);

    this.state = { validated: false };
  }

  handleSubmit(event) {
    const form = event.currentTarget;
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    this.setState({ validated: true });
  }

  render() {
    const { validated } = this.state;
    return (
      <Form
        noValidate
        validated={validated}
        onSubmit={e => this.handleSubmit(e)}
      >
        <Form.Row>
          <Form.Group as={Col} md="4" controlId="validationCustom01">
            <Form.Label>First name</Form.Label>
            <Form.Control
              required
              type="text"
              placeholder="First name"
              defaultValue="Mark"
            />
            <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="4" controlId="validationCustom02">
            <Form.Label>Last name</Form.Label>
            <Form.Control
              required
              type="text"
              placeholder="Last name"
              defaultValue="Otto"
            />
            <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="4" controlId="validationCustomUsername">
            <Form.Label>Username</Form.Label>
            <InputGroup>
              <InputGroup.Prepend>
                <InputGroup.Text id="inputGroupPrepend">@</InputGroup.Text>
              </InputGroup.Prepend>
              <Form.Control
                type="text"
                placeholder="Username"
                aria-describedby="inputGroupPrepend"
                required
              />
              <Form.Control.Feedback type="invalid">
                Please choose a username.
              </Form.Control.Feedback>
            </InputGroup>
          </Form.Group>
        </Form.Row>
        <Form.Row>
          <Form.Group as={Col} md="6" controlId="validationCustom03">
            <Form.Label>City</Form.Label>
            <Form.Control type="text" placeholder="City" required />
            <Form.Control.Feedback type="invalid">
              Please provide a valid city.
            </Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="3" controlId="validationCustom04">
            <Form.Label>State</Form.Label>
            <Form.Control type="text" placeholder="State" required />
            <Form.Control.Feedback type="invalid">
              Please provide a valid state.
            </Form.Control.Feedback>
          </Form.Group>
          <Form.Group as={Col} md="3" controlId="validationCustom05">
            <Form.Label>Zip</Form.Label>
            <Form.Control type="text" placeholder="Zip" required />
            <Form.Control.Feedback type="invalid">
              Please provide a valid zip.
            </Form.Control.Feedback>
          </Form.Group>
        </Form.Row>
        <Form.Group>
          <Form.Check
            required
            label="Agree to terms and conditions"
            feedback="You must agree before submitting."
          />
        </Form.Group>
        <Button type="submit">Submit form</Button>
      </Form>
    );
  }
}

render(<FormExample />);
`;
const jsCode14 = `
const { Formik } = formik;

const schema = yup.object({
  firstName: yup.string().required(),
  lastName: yup.string().required(),
  username: yup.string().required(),
  city: yup.string().required(),
  state: yup.string().required(),
  zip: yup.string().required(),
  terms: yup.bool().required(),
});

function FormExample() {
  return (
    <Formik
      validationSchema={schema}
      onSubmit={console.log}
      initialValues={{
        firstName: 'Mark',
        lastName: 'Otto',
      }}
    >
      {({
        handleSubmit,
        handleChange,
        handleBlur,
        values,
        touched,
        isValid,
        errors,
      }) => (
        <Form noValidate onSubmit={handleSubmit}>
          <Form.Row>
            <Form.Group as={Col} md="4" controlId="validationFormik01">
              <Form.Label>First name</Form.Label>
              <Form.Control
                type="text"
                name="firstName"
                value={values.firstName}
                onChange={handleChange}
                isValid={touched.firstName && !errors.firstName}
              />
              <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
            </Form.Group>
            <Form.Group as={Col} md="4" controlId="validationFormik02">
              <Form.Label>Last name</Form.Label>
              <Form.Control
                type="text"
                name="lastName"
                value={values.lastName}
                onChange={handleChange}
                isValid={touched.firstName && !errors.lastName}
              />

              <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
            </Form.Group>
            <Form.Group as={Col} md="4" controlId="validationFormikUsername">
              <Form.Label>Username</Form.Label>
              <InputGroup>
                <InputGroup.Prepend>
                  <InputGroup.Text id="inputGroupPrepend">@</InputGroup.Text>
                </InputGroup.Prepend>
                <Form.Control
                  type="text"
                  placeholder="Username"
                  aria-describedby="inputGroupPrepend"
                  name="username"
                  value={values.username}
                  onChange={handleChange}
                  isInvalid={!!errors.username}
                />
                <Form.Control.Feedback type="invalid">
                  {errors.username}
                </Form.Control.Feedback>
              </InputGroup>
            </Form.Group>
          </Form.Row>
          <Form.Row>
            <Form.Group as={Col} md="6" controlId="validationFormik03">
              <Form.Label>City</Form.Label>
              <Form.Control
                type="text"
                placeholder="City"
                name="city"
                value={values.city}
                onChange={handleChange}
                isInvalid={!!errors.city}
              />

              <Form.Control.Feedback type="invalid">
                {errors.city}
              </Form.Control.Feedback>
            </Form.Group>
            <Form.Group as={Col} md="3" controlId="validationFormik04">
              <Form.Label>State</Form.Label>
              <Form.Control
                type="text"
                placeholder="State"
                name="state"
                value={values.state}
                onChange={handleChange}
                isInvalid={!!errors.state}
              />
              <Form.Control.Feedback type="invalid">
                {errors.state}
              </Form.Control.Feedback>
            </Form.Group>
            <Form.Group as={Col} md="3" controlId="validationFormik05">
              <Form.Label>Zip</Form.Label>
              <Form.Control
                type="text"
                placeholder="Zip"
                name="zip"
                value={values.zip}
                onChange={handleChange}
                isInvalid={!!errors.zip}
              />

              <Form.Control.Feedback type="invalid">
                {errors.zip}
              </Form.Control.Feedback>
            </Form.Group>
          </Form.Row>
          <Form.Group>
            <Form.Check
              required
              name="terms"
              label="Agree to terms and conditions"
              onChange={handleChange}
              isInvalid={!!errors.terms}
              feedback={errors.terms}
              id="validationFormik0"
            />
          </Form.Group>
          <Button type="submit">Submit form</Button>
        </Form>
      )}
    </Formik>
  );
}

render(<FormExample />);
`;
const jsCode15 = `
<Form>
  {['checkbox', 'radio'].map(type => (
    <div key={\`custom-\${type}\`} className="mb-3">
      <Form.Check 
        custom
        type={type}
        id={\`custom-\${type}\`}
        label={\`Check this custom \${type}\`}
      />

      <Form.Check
        custom
        disabled
        type={type}
        label={\`disabled \${type}\`}
        id={\`disabled-custom-\${type}\`}
      />
    </div>
  ))}
</Form>
`;
const jsCode16 = `
<Form>
  {['checkbox', 'radio'].map(type => (
    <div key={\`custom-inline-\${type}\`} className="mb-3">
      <Form.Check
        custom
        inline
        label="1"
        type={type}
        id={\`custom-inline-\${type}-1\`}
      />
      <Form.Check
        custom
        inline
        label="2"
        type={type}
        id={\`custom-inline-\${type}-2\`}
      />
      <Form.Check
        custom
        inline
        disabled
        label="3 (disabled)"
        type={type}
        id={\`custom-inline-\${type}-3\`}
      />
    </div>
  ))}
</Form>
`;
