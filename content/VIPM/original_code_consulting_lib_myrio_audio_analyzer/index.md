---
title: "myRIO Audio Analyzer"
externalUrl: https://www.vipm.io/package/original_code_consulting_lib_myrio_audio_analyzer
summary: "The MyRIO Audio Analyzer App is an exmaple program for the MyRIO hardware that acquires and filters two channels of audio data."
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

Redirecting to https://www.vipm.io/package/original_code_consulting_lib_myrio_audio_analyzer

Vendor: Original Code Consulting

Author(s): David Thomson
 
Full Description:
The MyRIO Audio Analyzer App is an exmaple program for the MyRIO hardware that acquires and filters two channels of audio data.  This data can be trasnfered to the host computer, which it can be displayed and saved to a file.  Various filters and effects can be applied to the data, and the resulting filtered data, or the raw data, can be sent back out the audio outputs for immediate playback.

Overview: This project acquires audio data on the MyRIO, applies filters and effects, uses Network Streams to send the data to the Host, records data on the host, and displays data on the Host.
Requirements: LabVIEW FPGA Module, Network Streams software on the NI myRIO RT target. 
Instructions:
1. Make sure the Target IP Address is set correctly on the Audio Analyzer Desktop.vi to point to the MyRIO hardware.
2. Connect a microphone to the audio input jack. Connect headphones or a speaker to the audio output jack.
3. Run the MyRIO Audo Analyzer RT.vi on the myRIO target and the Audio Analyzer Desktop.vi on the Host, in either order.  
4. Adjust the Filter Selector and Effects controls as desired.  Press the Record button to save data to a file.  Press the Play button to send the live, filtered or raw data to the MyRIO audio output.