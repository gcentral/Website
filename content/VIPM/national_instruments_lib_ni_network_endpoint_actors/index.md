---
title: "NI Network Endpoint Actors"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_network_endpoint_actors
summary: "Network Endpoints allow you to link two actors running in separate application instances."
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
draft: true
tags:
 - "VIPM"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_network_endpoint_actors

Vendor: National Instruments

Author(s): Allen C Smith
 
Full Description:
Network Endpoints allow you to link two actors running in separate application instances.  Network endpoints are protocol-agnostic; they can support a range of network protocols.  Two are provided with this package:  TCP/IP and Network Streams.

This package includes two types of network endpoint:  Nested Endpoints and Caller Endpoints.

A Nested Endpoint is a Network Endpoint that is launched by a calling actor.  The nested endpoint will forward messages it receives from its caller across the network.    Any message the nested endpoint receives from across the network will be passed up to its caller.  When used with a remote nested endpoint, the endpoints establish a sibling relationship between the actors.

A Caller Endpoint is a Network Endpoint that sits at the top of an actor tree.  Caller endpoints launch a single nested actor that you specify.  If a remote actor uses a nested endpoint to connect to a local caller endpoint, the caller endpoint's nested actor will act like a nested actor of the remote actor.  Any messages sent from the nested actor to its caller will be forwarded across the network connection.  Any messages received from across the network by the caller endpoint will be passed down to the nested actor.

Users can extend the package to change how messages are serialized and/or encrypt the serialized message.

Licensed under the Apache License, Version 2.0 (the 'License');
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an 'AS IS' BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.