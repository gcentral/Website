---
title: "Temperature Controller for myRIO"
externalUrl: https://www.vipm.io/package/black_box_engineering_lib_temperature_controller_for_myrio
date: 2016-05-19
summary: "Temperature control during serving and during fermentation directly impacts both the consistency flavor of beer."
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
 - "UI"
---

Redirecting to https://www.vipm.io/package/black_box_engineering_lib_temperature_controller_for_myrio

Vendor: Black Box Engineering

Author(s): Ben Black
 
Full Description:
Temperature control during serving and during fermentation directly impacts both the consistency flavor of beer.  For a homebrewer making the step from uncontrolled ferementation in a closet or in a bathroom to temperature controlled fermentation in an old refrigerator or chest freezer typically marks a turning point in the quality of beer produced.  Even a few degrees in variation significantly impacts the flavor imparted on the beer by the yeast, and fermenting too hot or too cold can lead to ruined beer.

Typically homebrewers use off-the-shelf temperature controllers to close the loop on fermentation and kegerator temperatures, and these controllers range in complexity from simple analog models to advanced digital models; however by implementing all of the same features on a myRIO, the UI can be opened up much more broadly.  This application includes wireless interface to the control parameters and the sensor readings but also includes logging to show temperature trends over time.

The application has been written with homebrew beer fermentation in mind; however the same control algorithm can be used for any temperature control task.  The controller uses two AC circuits to control both a heating and a cooling system.  The same hardware and software could be used for temperature control and sous vide cooking, aging of cheese, temperature control of an electric smoker and many other temperature control tasks.

To run this application:

1.  Open LabVIEW
2.  In the Project Explorer window, open Desktop Main.vi and RT Main.vi.
3.  In the Project Explorer window, right click on Shared Vars.lvlib under the myRIO and select Deploy
4.  Click Run for RT Main.vi. At this point, the real-time code will run and LED0 should blink quickly while the real-time code waits to be initialized by the desktop application.
5.  Click Run for Desktop Main.vi. LED0 on the myRIO should now blink at a slower rate, and temperature data should be graphed at 1Hz on the screen.
6.  Changing the cooling parameters or the temperature set point in the desktop application will update those values in the controller.
7.  The state of the output relays will be represented by the boolean indicators for the heating and cooling circuits. The delay boolean shows True if turning on the cooling circuit has been delayed to prevent quick cycling of the compressor.
8.  Click Disconnect to stop the desktop application. This will allow RT Main.vi to continue running using the control parameters at the time of disconnection.
9.  Click Stop All to stop both the desktop application and the RT application. This will stop both Desktop Main.vi and RT Main.vi

This application supports myRIO 1900 and requires VI Package Manager 2014.