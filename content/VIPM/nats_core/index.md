---
title: "NATS Core"
externalUrl: https://www.vipm.io/package/nats_core
date: 2022-08-09
summary: "NATS Core client for LabVIEW"
showSummary: true
showAuthor: false
showEdit: false
showData: false
showViews: false
showReadingTime: false
showWordCount: false
showBreadcrumbs: false
showHeadingAnchors: false
sharingLinks: false
showZenMode: false
showPagination: false
showRelatedContent: false
draft: false
tags:
 - "VIPM"
 - "JSON"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/nats_core

Vendor: Drew Herron

Author(s): Drew Herron
 
Full Description:
Adds core client Neural Autonomic Transport System (NATS) functionality to LabVIEW. NATS is a lightweight pub/sub messaging system that provides at-most-once QoS messaging.

The entire toolkit is written in native LabVIEW and requires no external dependencies to run the code (other than a freely available functioning NATS server).

To learn more about NATS and to download the free, open-source server application visit <color=blue>https://nats.io</color>

**Note:** This is not a JetStream-enabled client.

**Features:**
  - Written entirely in LabVIEW
  - Supports publishing client commands: CONNECT, PUB, HPUB, SUB, UNSUB, PING, PONG
  - Supports reading server messages: INFO, MSG, HMSG, PING, PONG, +OK, -ERR
  - TCP connection refnum exposed to allow use of LabVIEW 2020+ native TLS
  - Server INFO and client CONNECT commands stored in native JSON to aid in futureproofing
  - Automatic PONG response to server PING requests for keep-alive functionality
  - Server/client configuration checks to validate HPUB usage
  - Handles asynchronous server INFO updates during a READ

**Examples Included:**
  - Simple NATS Client Publisher
  - Simple NATS Client Reader