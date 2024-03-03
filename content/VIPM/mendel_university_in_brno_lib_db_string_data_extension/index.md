---
title: "DB String Data Extension"
externalUrl: https://www.vipm.io/package/mendel_university_in_brno_lib_db_string_data_extension
date: 2023-10-19
summary: "The extension of the original ***LV Database Connectivity Toolkit*** is modifying the basic CRUD operations by converting 2D database data from the RecordSet object."
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

Redirecting to https://www.vipm.io/package/mendel_university_in_brno_lib_db_string_data_extension

Vendor: Mendel University in Brno

Author(s): Martin Fajman, Jiøí Èupera
 
Full Description:
The extension of the original ***LV Database Connectivity Toolkit*** is modifying the basic CRUD operations by converting 2D database data from the RecordSet object. While the original Toolkit converts this object data to the Variant data type and then to a custom cluster structure; this extension simplifies the output data structure to a 2D string array. This string data table is supplemented with information about data types of individual columns for the RecordSet object.
The extension does not aim to completely replace the LabView Database Connectivity Toolkit, it is mainly based on its controls and uses some of its VIs. It focuses on CRUD operations only; because they are the most often used in a variety of applications. However, the Advanced functions and Utilities (e.g. Transactions) it preserves from the original toolkit.
The goal of modifying the data types used is **to simplify the creation of program code and its maintainability**. The advantage becomes apparent especially when tables or queries are expanded or modified, when by default it is necessary to change (ideally type definition) the cluster structures corresponding to the relevant query or table. However, if such a cluster is used in a series of VIs, then it is necessary to modify the code in all these VIs very often for keeping all the data operations with the cluster structure correct.
In the case of conversion to 2D string data, it is often necessary to modify only the VI that is responsible for preparing the data presentation (conversion to the given data types for display on specific VI's Front Panel), which can be done easily using the Case Structure (according to the column number) in a single For Loop. In addition, very often the given data type is already handled within the previous code version; thus, there is a necessity to add the number of the given database data column to the specific Case of the extended Case Structure only. Otherwise, a general 2D string array type without having to modify connectors between VIs can easily be implemented throughout the application structure without modification of these VI codes.
Of course, it entails the need to know the data types of the database table columns during Insert and Update operations in the RDBMS. Therefore, the extension more rigorously checks the conversion of data types before inserting them into the RDBMS. To do so, the controls structure within the library and modified VIs (e.g. ADO_CheckColumnInfovsData.VI)), which check data compliance before Insert, are added.
**The package has the following structure**:
**1)	DB-DAO - DB Database Access Object **
Where are the *basic operations* for the data objects manipulations, data types and *ADO - Automation Data Operations basic functions* for working with RDMBS itself. It has to be stated, these are often based on modified VIs of the original Toolkit.
There is also a block of *Utilities*- a set of VIs for a management of DB schema,
another block of VIs for *Conversion* - DB data types into LV data types, primarily into to 2D string data. DB data management involves operations with *Recordset* - object. Basic VIs for operations with the RecordSet object are the other block of VIs, for a compatibility they enable a conversion also into the LabView Variant type. For SELECT operations, a procedure of sequential reading of a RecordSet with the option of Skipping several records; and at the same time reading a block of only several records after this skipping, has been added. This approach can be advantageously used when reading a large amount of data and the need to display the entire data flow quickly online, so one can read every 100th item or 5 records and then jump by another 10 records, etc. (ADO_RecordSet_FetchParseStringData.VI).
A more detailed description and explanation of the functionality can be provided in the extended documentation by each VI itself. 
**2)	Commands**
This section includes basic CRUD operations (DELETE is organized as an SQL open command - see ADO). It can also be considered as a section of examples, how to use basic VIs. Also each command is an example of a more complex VI to manipulate data in the basic managament of a table in the DB schema.
**3)	Controls**
Contain individual Controls and Type Definitions, some modified from the LV Database Connectivity Toolkit. Some non-DB subVIs for the extension operation (VI busy control) are also situated here.
**4)	Globals**
A  global variable to provide path to UDL file is organized within the extension in oreder to easily connect from different VIs without a necessity to seek the path again and again. Decimal separator setup is also possible via global variables.
*Note*: Custom Error Handling is also introduced within the extension library, which uses the standard Error Cluster, but allows in larger systems to add additional error parameters, i.e. Severity, the method of transmitting information about the occurrence of an error and error logging settings, including the use of user error codes. For more general use, however, it is possible to replace custom Error Handling with standard LabView error cluster handling.

Testing and practical deployment of this extension in applications is verified on different versions of Oracle **mySQL** (from 5.7X to 8.XX). Performance is comparable to the original toolkit.

***Summary***
The motivation was to find a significant simplification for the creation, transferability of the part of the code, and mainly the code modifications for working with RDMSes, where cluster data structures are used as standard method. The cluster structure is a very powerful tool in LabView for managing data of various types and ensuring its data flow, but when there are frequent modifications of the data structure, it can be quite challenging to maintain large-scale applications due to the need to modify the code for working with cluster structures. In general, some universal ORM is often built between the RDBMS and the application itself. Unfortunately, after many years of searching for a suitable ORM for LabView, it didn't work out. Thus, the presented extension proposal is a kind of a very, very limited simple ORM in that it uses only one data type (2D string array) within the LV code, which is relatively easy to work with even for less experienced programmers.