import MockAdapter from "axios-mock-adapter";
import mockAuth from "./mockAuth";

export default function mockAxios(axios) {
  const mock = new MockAdapter(axios);

  mockAuth(mock);

  return mock;
}