---
title: "Deep Learning Toolkit"
externalUrl: https://www.vipm.io/package/ngene_lv_dnn_deep_learning_toolkit
date: 1903-12-31
summary: "**Empower LabVIEW with Deep Learning**"
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

Redirecting to https://www.vipm.io/package/ngene_lv_dnn_deep_learning_toolkit

Vendor: Ngene

Author(s): Ngene
 
Full Description:
**Empower LabVIEW with Deep Learning**
**Deep Learning Toolkit for LabVIEW** is a high-level API providing possibilities to build, configure, visualize, train, analyze and deploy Deep Learning based systems. The toolkit is mainly implemented in LabVIEW and does not have any outer dependencies, which simplifies the installation, development, deployment and distribution of toolkit based applications and systems (particularly, can be easily deployed on NI's Real Time targets).

<color=FF1212>**Note:** This installer requires LabVIEW and VI Package Manager to be run with Administrator privileges. </color>

**Main Features:**
Create, configure, train and deploy Deep Neural Networks in LabVIEW
Visualize network topology and display common metrics (memory footprint, FLOPs)
API to debug and analyze networks
Save trained networks (configuration and weights) and load for deployment
NI's Real Time target support for deployment
Ready to run real world examples

**Supported Layers:**
Input (1D, 3D)
Augmentation - Implemented in Input3D
Fully Connected - FC
Convolutional - Conv3D
Batch Normalization
Activation
Pooling (MaxPool, AvgPool)
DropOut (1D, 3D)
SoftMax
Region (for YOLO v2)

**Activation types:**
Sigmoid
Hyperbolic Tangent
ReLU
Leaky ReLU

**Solver (Optimization Algorithm):**
Stochastic Gradient Descend (SGD) based Backpropagation algorithm with Momentum

**Loss Functions:**
MSE - Mean Squared Error
Cross Entropy (LogLoss)

**Examples:**
Examples are available to demonstrate the use of the toolkit on: 
**1. MNIST_Classifier_MLP(Train).vi** - training the deep neural network for image classification task in handwritten digit recognition problem (based on MNIST database) using MLP (Multilayer Perceptron) architecture
**2. MNIST_Classifier_CNN(Train).vi** - training the deep neural network for image classification task in handwritten digit recognition problem using CNN (Convolutional Neural Network) architecture
**3.MNIST_Classifier(Deploy).vi** deploying pretrained network by automatically loading network configuration and weights files generated from the examples above.
**4. YOLO_Object_Detection(Cam).vi** automatically building and loading pretrained network for object detection based on YOLO (You Only Look Once) architecture.

**Development License Activation Instructions**
**For Toolkit's developemnt license activation please call Third Party Add-on Activation Wizard (Help>>Add-Ons..) from 32 bit version of LabVIEW, as there is a known issue in 64 bit LabVIEW 2017 version**