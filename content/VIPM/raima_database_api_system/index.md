---
title: "Raima Database API for LabVIEW (System)"
externalUrl: https://www.vipm.io/package/raima_database_api_system
date: 2016-05-19
summary: "Wait! If you haven't started VIPM as an Administrator, you may need to."
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

Redirecting to https://www.vipm.io/package/raima_database_api_system

Vendor: Raima Inc

Author(s): Wayne Warren
 
Full Description:
Wait! If you haven't started VIPM as an Administrator, you may need to. The Real-time object installation will fail unless this program is running as an administrator.

Raima Database API for LabVIEW is Raima Database Manager (RDM) 12.0, Embedded version on Windows and Real-time CompactRIO, built with LabVIEW 2013. RDM will create and manage a database on the local computer. On the CompactRIO or Single-Board RIO with VxWorks, database(s) will be stored into the '/ni-rt/LabVIEW Data' directory. On the NI Linux Real-Time cRIO, the database(s) will be stored in the '/home/lvuser/natinst/LabVIEW Data' directory. The SQL language is used to manage databases. The LabVIEW API is patterned after the definition of ODBC.

Use the Measurement & Automation Explorer to install the required real-time components to your real-time system(s). See the help file.

If you are missing Microsoft redistributable files (MSVCR110.DLL, ...), you will need to install the free download from Microsoft at http://www.microsoft.com/en-us/download/details.aspx?id=30679.

Samples:
 - Hello 01.vi: 'Hello World' for a database in LabVIEW. Fills one row with one column with the
   string 'Hello World', then reads it back out to display.
 - Hello 02.vi: A slightly more complex 'Hello World' that takes user input and stores it into the
   one-row, one-column database using a prepared statement parameter marker. Then it reads it
   back out to display.
 - Hello 03.vi: A two-table example that demonstrates primary/foreign key relationships and the 
   fetching of a multiple row result set.
 - Hello 04.vi: Same as Hello 01 except it uses the external process TFSERFER.EXE to handle the
   database I/O.
 - Hello 05.vi: Same as Hello 01 except it uses the external process RDMSERVER.EXE to handle
   the SQL commands.
 - Testdb.vi: Exercises most of the functions delivered in this package. Doesn't do anything useful.
 - Raima ODBC Database Benchmark.vi: Runs a performance benchmark patterned after the benchmark
   contained in the SQLite and MySQL packages.
 - Raima ODBC Streaming Benchmark.vi : Runs a performance benchmark patterned after the TDMS
   streaming data benchmark.
 - A new set of examples for demonstrating encryption functionality have been placed in an
   'encryption' subdirectory:
      - Hello Create.vi: Creates a 'Hello World' database named HelloWorldEnc as an encrypted database.
      - Hello Add-Read.vi: Opens and updates HelloWorldEnc, which was created by 'Hello Create.vi'.
      - Encrypt Database.vi: Encrypts or decrypts any database. Shows SQL statements used.
      - Raima SQL Database Benchmark.vi: This is identical to the 'Raima ODBC Database Benchmark.vi'
        above, except that the database is opened as an encrypted database. May be used for
        determining the cost of encryption.

Raima is a leading provider of high-performance, always on, database technology tailor-made for both in-memory and persistent storage. Raima delivers database solutions customized for the following application types: Mobile, Embedded, Desktop & Server, and Enterprise Lite. The products available within the RDM System portfolio are cross-platform, small footprint, fast and reliable database solutions designed for scalable and distributed architectures. These products are successfully deployed worldwide embedded within a large range of applications such as industrial automation systems, military flight control systems, telecom routers & switches, financial trading systems, medical equipment, data backup solutions, consumer electronic devices and more.