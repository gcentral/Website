---
title: "JKI Simple Localization"
externalUrl: https://www.vipm.io/package/jki_simple_localization
summary: "This toolkit makes use of the 'Language for non-Unicode programs' setting in Windows (located in the 'Region and Language' settings)."
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
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/jki_simple_localization

Vendor: JKI

Author(s): JKI
 
Full Description:
This toolkit makes use of the 'Language for non-Unicode programs' setting in Windows (located in the 'Region and Language' settings). The toolkit uses a JSON dictionary file (can be in Unicode format) to store phrases in several different languages. The toolkit will translate from the default language (typically English) to the target language specified as the 'Language for non-Unicode programs' in Windows.

It does all this by making calls into the Windows API to translate the Unicode 16-bit characters from the dictionary into 8-bit non-unicode characters that can be displayed by non-Unicode program (assuming the 'Language for non-Unicode programs' has been properly set in Windows).

In this way, LabVIEW developers have a simple way to localize their applications, even though LabVIEW does not support Unicode, out-of-the-box.