---
title: "ALAB SSH"
externalUrl: https://www.vipm.io/package/alab_technologies_lib_alab_ssh
date: 2019-04-30
summary: "Implements SSH and SCP client for LabVIEW using Renci SSH.NET."
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
 - "protocol"
---

Redirecting to https://www.vipm.io/package/alab_technologies_lib_alab_ssh

Vendor: Alab Technologies

Author(s): Alab Technologies
 
Full Description:
ALAB-SSH implements the Secure Shell (SSH) which is a cryptographic network protocol for operating network services securely over an unsecured network. SSH provides a secure channel over an unsecured network in a client-server architecture, connecting an SSH client application (the PC running LabVIEW) with an SSH server. Common applications include remote command-line login and remote command execution, but any network service can be secured with SSH. 
SSH was designed as a replacement for Telnet and for unsecured remote shell protocols such as the Berkeley rlogin, Rsh, and Rexec protocols. Those protocols send information, notably passwords, in plaintext, rendering them susceptible to interception and disclosure using packet analysis. The encryption used by SSH is intended to provide confidentiality and integrity of data over an unsecured network.
ALAB-SSH is based on Renci SSH.NET library for Windows. It relies on .NET framework 4.0 and runs on Windows 7 and later versions of Windows. 

Note: If you don't know what version of .NET framework is available on your PC follow the steps in the Microsoft's help page.
Note: If you don't currently have .NET 4.0 on your PC, you can download and install it from Microsoft's website.

Features:
'	Provides SSH and SCP client functionality for Windows.
'	Supports diffie-hellman-group-exchange-sha256, diffie-hellman-group-exchange-sha1, diffie-hellman-group14-sha1 and diffie-hellman-group1-sha1 key exchange methods.
'	Supports 3des-cbc, aes128-cbc, aes192-cbc, aes256-cbc, aes128-ctr, aes192-ctr, aes256-ctr, blowfish-cbc, cast128-cbc, arcfour and twofish encryptions.
'	Supports hmac-md5, hmac-sha1, hmac-ripemd160, hmac-sha2-256, hmac-sha2-256-96, hmac-md5-96 and hmac-sha1-96 hashing algorithms.
'	Supports publickey, password and keyboard-interactive authentication methods
'	Supports RSA and DSA private key
'	Supports DES-EDE3-CBC, DES-EDE3-CFB, DES-CBC, AES-128-CBC, AES-192-CBC and AES-256-CBC algorithms for private key encryption.
'	Supports two-factor or higher authentication
'	Supports SOCKS4, SOCKS5 and HTTP Proxy