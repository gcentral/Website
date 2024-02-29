---
title: "Cassandra-driver"
externalUrl: https://www.vipm.io/package/db_lib_cassandra_driver
summary: "These files implement parts of the binary protocol v3 for Cassandra in LabVIEW."
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

Redirecting to https://www.vipm.io/package/db_lib_cassandra_driver

Vendor: Lawrence Berkeley National Laboratory

Author(s): Arun Persaud
 
Full Description:
These files implement parts of the binary protocol v3 for Cassandra in LabVIEW.

This product is provided as-is and is not supported by the developer or E.O. Lawrence Berkeley National Laboratory.

The code has been tested on LabVIEW for Windows 7(32 bit). Other platforms should work but your milage may vary.

The package assumes you want to connect to a running Cassandra instance and communicate via CQL with it.

For information on Cassandra and how to install it, please visit:
http://cassandra.apache.org

Current supported features:
  read/write for most variable types (some maps/sets and user defined variables are not supported)
  select keyspace

Not supported:
  authentication
  some maps/sets and user defined variables are not supported
  compression

How to use it
  clone repository, copy files into project or create library (project->build) and use the library
  or use vipm

Contribution guidelines
  patches and contributions are welcome;) Please visit the bitbucket home page of this project at
  https://bitbucket.org/berkeleylab/atap-labview-cassandra-driver to submit bug reports and to submit
  patches.

License: see License file in package

Dependencies: VI Package Manager 2014 or later

Links:
  * Cassandra homepage: http://cassandra.apache.org/
  * Cassandra binary protocal version 3: 
      https://git1-us-west.apache.org/repos/asf?p=cassandra.git;a=blob;f=doc/native_protocol_v3.spec;h=9894d76af14ad6d2e2e4a53a278d32b2e1839c13;hb=HEAD
  * Cassandra Tutorials: http://www.datastax.com/resources/tutorials