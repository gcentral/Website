---
title: "COS Azure Kinect Sensor&Body Tracking"
externalUrl: https://www.vipm.io/package/cos_lib_cos_azure_kinect_sensor&body_tracking
summary: "COS Azure Kinect Sensor&Body Tracking for LabVIEW current version encapsulates the depth, vision and imu sensor control and  real-time human body 32 joint point tracking."
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

Redirecting to https://www.vipm.io/package/cos_lib_cos_azure_kinect_sensor&body_tracking

Vendor: COS

Author(s): zdb
 
Full Description:
COS Azure Kinect Sensor&Body Tracking for LabVIEW current version encapsulates the depth, vision and imu sensor control and  real-time human body 32 joint point tracking.

**Hardwsre Required**
Azure Kinect DK (https://www.microsoftstore.com.cn/vr-and-mr/azure-kinect-dk)

**Features**
01)  Depth camera access and mode control (a passive IR mode, plus wide and narrow field-of-view depth modes)
02)  RGB camera access and control (for example, exposure and white balance)
03)  Directly access point cloud data
04)  Motion sensor (gyroscope and accelerometer) access
05)  Synchronized Depth-RGB camera streaming with configurable delay between cameras
06)  External device synchronization control with configurable delay offset between devices
07)  Camera frame meta-data access for image resolution, timestamp, etc.
08)  Device calibration data access
09)  Point cloud to triangle mesh reconstruction function
10)  Bilateral filtering and smoothing of triangular mesh data
11)  Triangular mesh data storage and reading
12)  Real-time human body 32 joint point tracking and rendering
13)  *c3d file read and write.

 It is believed that you can easily apply the API to your LabVIEW application.

**Update history**

01) Only supports NVIDIA graphics card, and it is 2 series or less(1.0.1).
02) UPU mode requires CUDA driver to be installed(1.0.1).
-----------------------------------------------------------------
03) Add support for NVIDIA RTX 30xx series GPUs(cuda_11.1.1+Recommended NVIDIA driver version472.84 (Studio)) (2.0.1).
04) CPU mode no longer requires NVIDIA CUDA dependencies(2.0.1).
05) Added body tracking data to save, read standard *c3d files(2.0.1)
06) Optimize the problem of insufficient **IMU memory**(2.0.1)


For successful installation of dependencies it's required to run the VIPM
and LabVIEW with **admin rights** 

***Notice that COS Azure Kinect Sensor&Body TrackingToolkit provides a 7-day trial***


COS Azure Kinect Sensor&Body Tracking  from COS





REV 2.0,00/2022/1021

Build by: COS

Qingdao,China

Original Release