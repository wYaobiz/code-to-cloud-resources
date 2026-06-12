# Chapter 12 · Modern Web Development

Selected solutions for the review questions on SPAs, the Virtual DOM, GraphQL, microservices, and modern practices. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 12.1
**Server-side rendering vs. Single Page Applications.**

With server-side rendering the server generates complete HTML for each request, so the first view appears quickly and the content is easy for search engines to index, at the cost of a full round trip per navigation. With an SPA the browser loads once and updates views with JavaScript, giving a fluid, app-like feel after load, but with a heavier initial download and extra work to make content indexable. Server-side rendering suits content-heavy, SEO-sensitive sites, while SPAs suit highly interactive applications; hybrid approaches combine both.

### Problem 12.2
**The Virtual DOM.**

The Virtual DOM is a lightweight in-memory representation of the real DOM. When state changes, React builds a new virtual tree and compares it against the previous one, a process called reconciliation, to compute the minimal set of real DOM operations needed. Because direct DOM manipulation is expensive, minimizing and batching those operations this way makes updates more efficient than re-rendering the page directly.

### Problem 12.3
**What GraphQL solves.**

REST endpoints often return fixed shapes, which leads to over-fetching, where a response includes more fields than the client needs, and under-fetching, where several requests are required to assemble one view. GraphQL lets the client request exactly the fields it needs in a single query. Its type system also serves as a validated, self-documenting contract that benefits both the API developers and the consumers.

### Problem 12.4
**Authentication, authorization, and JWTs.**

Authentication establishes who a user is, while authorization determines what they may do. A JSON Web Token is a signed, self-contained token carrying claims about the user, which the server verifies by checking the signature rather than looking up a session. Security considerations include transmitting tokens only over HTTPS, setting sensible expirations, and protecting them carefully, since anyone holding a valid token can use it until it expires.

### Problem 12.5
**The circuit breaker pattern.**

A circuit breaker prevents cascading failures by monitoring calls to a dependency and stopping further calls when that dependency is failing, so one struggling service does not drag down the rest. It has three states: closed, where calls flow normally; open, where calls are blocked after too many failures and fail fast; and half-open, where a few trial calls test whether the dependency has recovered before fully resuming.

### Problem 12.7
**Infrastructure as Code.**

Infrastructure as Code defines and manages infrastructure through version-controlled configuration files rather than manual setup. It differs from traditional management by making environments reproducible, reviewable, and automatable, solving the problem of inconsistent, hard-to-reproduce servers. The new challenges it introduces include learning the tooling, managing state files carefully, and applying the same discipline of testing and review to infrastructure that one applies to application code.

### Problem 12.9
**WebAssembly.**

WebAssembly is a low-level binary format that runs in the browser at near-native speed, letting code written in languages like C, C++, or Rust execute on the web. It differs from JavaScript in being compiled and faster for computationally heavy work. It is well suited to tasks such as games, image or video editing, and scientific simulation, and it works alongside JavaScript, which still handles the DOM and overall page logic while delegating intensive computation to WebAssembly.

### Problem 12.13
**The testing pyramid.**

The testing pyramid describes the recommended balance of test types: many fast, cheap unit tests at the base, fewer integration tests in the middle, and a small number of slow, broad end-to-end tests at the top. It is shaped as a pyramid because unit tests are quick to run and maintain while end-to-end tests are expensive and brittle, so relying mostly on the lower levels gives good coverage without an unmanageable maintenance burden.

### Problem 12.14
**Web Components.**

Web Components are a browser-native way to create custom, reusable elements, in contrast to components tied to a specific framework. They rest on three pieces: Custom Elements, which let you define new tags; Shadow DOM, which encapsulates an element's structure and styles so they do not leak in or out; and HTML Templates, which define reusable markup that is not rendered until used. They solve the problem of building reusable, encapsulated UI that works across frameworks and plain pages alike.
