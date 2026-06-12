# Chapter 2 · Internet Protocols

Selected solutions for the review questions on networking, TCP/IP, DNS, and HTTP. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 2.1
**OSI 7-layer model vs. the TCP/IP model.**

The OSI model describes networking in seven layers, while the TCP/IP model uses four. We usually prefer the TCP/IP model when discussing Internet protocols because it maps directly to the protocols actually deployed on the Internet, so it is more practical for real work. The TCP/IP model collapses several OSI layers into one: the OSI application, presentation, and session layers correspond to the single TCP/IP application layer, and the OSI physical and data link layers correspond to the single TCP/IP link layer.

### Problem 2.2
**TCP vs. UDP.**

TCP establishes a connection through a handshake before any data flows, guarantees reliable delivery, and keeps data in order by retransmitting lost segments and acknowledging received ones. UDP is connectionless, sends datagrams without setup, and provides no guarantee of delivery or ordering. UDP suits applications where speed matters more than perfect reliability, such as live video, voice calls, or online gaming, because a slightly dropped packet is preferable to the delay TCP would introduce while recovering it.

### Problem 2.4
**TCP three-way handshake.**

The three steps are SYN, SYN-ACK, and ACK. The client sends a SYN with its initial sequence number, the server replies with a SYN-ACK acknowledging the client and supplying its own sequence number, and the client returns an ACK. The handshake is necessary because it synchronizes sequence numbers on both sides and confirms that each end can both send and receive, which is the foundation TCP relies on to detect loss and deliver data reliably and in order.

### Problem 2.5
**Parts of an HTTP request and response.**

A request has a request line (method, path, and HTTP version), a set of headers, and an optional body. A response has a status line (version, status code, and reason phrase), headers, and an optional body. Two useful request headers are Host, which identifies the target site when many share an IP, and User-Agent, which identifies the client software. Two useful response headers are Content-Type, which tells the browser how to interpret the body, and Content-Length, which states the body size in bytes.

### Problem 2.6
**Status code 404 vs. 301.**

A 404 means the server understood the request but found no resource at that path, which can happen from a mistyped URL, a moved or deleted page, or a broken link. A 301 means the resource has moved permanently, and the response includes a Location header with the new address. On a 301 the client should follow the redirect to the new URL and ideally remember it for future requests, whereas a 404 calls for no automatic retry since the resource simply is not there.

### Problem 2.7
**Why HTTPS matters even without sensitive data.**

HTTPS encrypts traffic so it cannot be read or altered in transit, which protects users even on sites that handle no obviously sensitive information. Two threats it mitigates are eavesdropping, where someone on the network reads the content of pages a user visits, and tampering, where an attacker injects or modifies content such as ads or malicious scripts. DNS cache poisoning is an attack that inserts false records into a resolver's cache so users are sent to the wrong server; DNSSEC helps prevent it by adding cryptographic signatures that let resolvers verify a record genuinely came from the authoritative source.

### Problem 2.8
**Roles of Apache and PHP in a LAMP stack.**

Apache is the web server that receives HTTP requests and returns responses. When a request is for a dynamic PHP page, Apache hands the file to the PHP interpreter rather than returning it as-is. PHP executes the code, often querying the database, and produces HTML, which Apache then sends back to the browser. MySQL is the database that stores and retrieves the application's data, responding to queries the PHP code issues during page generation.
