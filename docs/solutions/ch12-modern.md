# Chapter 12 · Modern Web Development

Suggested solutions for the review questions and hands-on exercises covering modern web development — SPAs, the Virtual DOM, GraphQL, microservices, CI/CD, and emerging technologies.

!!! note
    Attempt each problem yourself before consulting these solutions. The hands-on exercises here are larger, multi-part projects; each links to a complete reference implementation under [Source Code](../code/index.md).

## Review Questions

### Problem 12.1
**Compare and contrast server-side rendering (SSR) with Single Page Applications (SPAs).**

With SSR, the server generates complete HTML for each request, so the first paint is fast and the content is readily indexed by search engines, at the cost of a full round trip per navigation. With SPAs, the browser loads once and updates views with JavaScript, giving a fluid app-like feel after load, but with a heavier initial download and extra work needed for SEO. SSR suits content-heavy, SEO-sensitive sites; SPAs suit highly interactive applications. Hybrid approaches combine both.

### Problem 12.2
**Explain the Virtual DOM in React and how it improves performance.**

The Virtual DOM is a lightweight in-memory copy of the real DOM. When state changes, React builds a new virtual tree and *reconciles* it against the previous one, computing the minimal set of real DOM operations required. Because direct DOM manipulation is expensive, batching and minimizing those operations through reconciliation makes updates more efficient than naively re-rendering the page.

### Problem 12.3
**What problems does GraphQL solve that REST APIs struggle with?**

REST endpoints often return fixed shapes, leading to *over-fetching* (receiving more fields than needed) or *under-fetching* (needing several requests to assemble one view). GraphQL lets the client request exactly the fields it needs in a single query, and its type system gives both API authors and consumers a self-documenting, validated contract.

### Problem 12.4
**Describe the difference between authentication and authorization, and how JWTs work.**

Authentication establishes *who* a user is; authorization determines *what* they are allowed to do. A JSON Web Token is a signed, self-contained token carrying claims about the user. The server verifies the signature rather than looking the session up in a store, which aids statelessness — but tokens must be transmitted over HTTPS, given sensible expirations, and handled carefully, since anyone holding a valid token can use it until it expires.

!!! tip "Remaining questions"
    Problems 12.5 through 12.15 (circuit breaker pattern, edge computing, Kubernetes, distributed tracing, the testing pyramid, Web Components, AI integration) follow the same format.

## Hands-On Exercises

### Exercise 12.1 — React SPA with API Integration
**Goal.** Build a product-catalog SPA in React backed by a small REST API.

**Approach.** Scaffold with Vite. Use React Router for the product list, product detail, and cart views, with reusable components for cards and navigation. Build an Express API serving product data with pagination (`page`/`limit`) and proper CORS. Connect with `fetch`, handling loading states, error boundaries, and optimistic cart updates via `useState`, `useEffect`, and a custom hook.

**Reference implementation:** [`src/ch12-modern/react-spa/`](../code/index.md)

### Exercise 12.2 — GraphQL API
**Goal.** Transform the REST API from Exercise 12.1 into a GraphQL API.

**Approach.** Define a schema with `Product`, `Category`, and `Review` types and their relationships. Implement query types for single products and paginated lists, and mutation types for creating reviews and updating products. Demonstrate how a single GraphQL query replaces what previously took multiple REST calls.

**Reference implementation:** [`src/ch12-modern/graphql-api/`](../code/index.md)
