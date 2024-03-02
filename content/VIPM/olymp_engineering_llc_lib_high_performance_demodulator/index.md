---
title: "High Performance Demodulator Library for LabVIEW FPGA"
externalUrl: https://www.vipm.io/package/olymp_engineering_llc_lib_high_performance_demodulator
date: 2016-05-19
summary: "High Performance Demodulator Library for LabVIEW FPGA "
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

Redirecting to https://www.vipm.io/package/olymp_engineering_llc_lib_high_performance_demodulator

Vendor: OLYMP Engineering LLC

Author(s): OLYMP Engineering LLC
 
Full Description:
High Performance Demodulator Library for LabVIEW FPGA 

Single carrier modulations are widely used in modern wireless communication receivers for data transmission and reception.  OLYMP Engineering LLC has developed Demodulation Library for FPGA that performs high speed BPSK, QPSK, 8PSK, 16PSK, 8QAM, 16QAM and OQPSK demodulation with symbol rate up  to 40MSPS.  Demodulation Library supports development for FPGA and Windows platforms, which allows  developers to analyze, prototype algorithms, and application specific performance on Windows before  compiling for FPGA.  With LabVIEW and LabVIEW FPGA time to market is reduced drastically and. 

The PSK demodulator is mainly used to restore the shifted phases that are modulated at symbol rate to the carrier signals in the transmitter, and reinterpret the phase information back to symbols. The main components included in the High Performance Demodulator Library for LabVIEW FPGA are automatic gain control (AGC), matched filtering, carrier recovery, timing recovery, symbol decision and lock detection. This core can be dynamically programmable for MPSK=2, 4, 8 and 16 or MQAM=8 or 16 or OQPSK demodulation. Once the system locked, both demodulated In-Phase and Quadrature (I/Q) samples and hard-coded symbols are available at the outputs. Figure 1 shows the block diagram of the High Performance Demodulator Library for LabVIEW FPGA. The High Performance Demodulator Library for LabVIEW FPGA processes 16 bit baseband I/Q data. The input data rate requires only 2 times of symbol rate which simplifies requirements for RF part and increases possible maximum symbol rate that can be demodulated. The main data path includes a matched filter using Root Raised Cosine filter (RRC), AGC, Frequency correction, timing recovery, fine tuning/tracking and hard decoding. Following the RRC filter the AGC is used to maximize the dynamic range of the signal magnitude and maintain an optimal output sample level for symbol decision. In the timing loop error detector, Gardner timing recovery technique is provided to achieve a high performance and low SNR recovery. Finally, the symbol decision
component encodes the demodulated I/Q samples into 8-bit hard-coded symbols according to user input map table. The lock detector monitors the timing and carrier loop errors and asserts a lock signal when both accumulated errors are within the threshold during a predefined observation time.

Timing Recovery, Carrier Recovery and Symbol Decision 

The timing recovery used to build a symbol clock synchronous to the one in the transmitter.  The timing recovery loop includes a timing error detector (TED), a loop filter and a timing control unit.  Gardner timing error technique is provided as the TED. It uses 2 samples per symbol to generate timing error estimate. This error term is processed by a second order loop filter and used as the control signals to the timing control unit. The timing control unit outputs the symbol clock to the estimating function, which calculates actual value from input 2 samples (provides maximum eye opening).  In carrier recovery component, hard decision de-mapping used to remove the residual carrier frequency and recover the phase information.  Carrier recovery component includes a phase error detector, and a second order IIR loop filter.  The detected phase error is fed back to the phase error detector.  Once the residual frequency is locked system, outputs recovered IQ Data. 

OLYMP Engineering LLC 

The input to the symbol decision is 16 bit demodulated I/Q samples from previous step. These samples are first converted to polar coordinate representation.  An encoder logic encodes the symbols based on the map table. The map table is a 16 bit word array, which allows the user to input their own coding scheme. 

Conclusion

OLYMP Engineering LLC has developed a high performance baseband B/Q/8/16PSK, OQPS and  8/16QAM demodulator that works at symbol rate up to 40 MSPS and locks within 30 msec. The High Performance Demodulator Library for LabVIEW FPGA contains all necessary components that is required for demodulation of PSK, QAM waveforms, such as AGC, matched filtering, timing recovery, carrier recovery, symbol decision, and lock detector. The High Performance Demodulator Library for LabVIEW FPGA core can be used to develop a complete solution for communication systems.

Software requirements: LabVIEW (2014 or later), LabVIEW FPGA Module (2014 or later), NI-RIO Device Driver (14.5.0 or later), Modulation Toolkit (4.4 or later), NI-RFSA Driver (14.5 or later).
Hardware requirements: NI PXIe-7966R, NI PXIe-7971R, NI PXIe-7972R, NI PXIe-7975R, NI PXIe-7976R.


For purchasing or getting support on the product:
E-mail: info@olympmail.am
Tel.: +374 93 688 597
Add.: 123 Hovsep Emin EIF Entrance, 102
                             Yerevan 0051, Armenia