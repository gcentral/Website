---
title: "Face Recognition"
externalUrl: https://www.vipm.io/package/4smartmachines_lib_face_recognition
date: 2020-04-06
summary: "Recognizes faces together with their location and pose in an image. Uses advanced algorithms for robust results."
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
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/4smartmachines_lib_face_recognition

Vendor: 4SmartMachines

Author(s): Manfred Prantl
 
Full Description:
This VI lib represents an advanced face recognition system. It will find the location and pose of faces in an image with the help of deep learning algorithms. It will then recognize the face by finding the closest match to faces in a database.
Additionally, you can also compare two images to see whether the depicted persons are the same or different.
The VIs now also return face descriptor vectors so that you can do your own analysis functions on the detected faces.  

In order to run fast it can use a CUDA-enabled GPU. However, it can also run only on CPU (with much slower speed).

The VI extracts the location of a face in the image and will return its rectangle. The pose information consists of 5 prominent features of the face (e.g. eye location, nose location). It will also return the top 5 best matches with faces in a database. There is also a VI in the package that constructs such a face database from example images.

In comparison to the OpenCV face detection example this detector provides superior detection performance also for non-frontal faces. 

<color=red>**Note: This installer requires LabVIEW and VI Package Manager to be run with Administrator privileges.**</color> 

*** **NI VISION, LabView 64-Bit** is required