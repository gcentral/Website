*** Settings ***
Documentation   Test if the input goes back to disabled after pressing ESC
Suite Setup     Run Keywords    Open Browser To Login Page  Log In
Suite Teardown  Close Browser 
Test Template   Test Parameter Change Abort   
Resource        resource.robot

*** Test Cases ***      ID          TESTPARAMETER   RESETPARAMETER
Change Full Name        fname       Steve Harris    GCentral Developer
Change Display Name     dname       SHarris         GCentralDev
Change Location         location    Nassau          The space between purpose and action.

*** Keywords ***
Test Parameter Change Abort
    [Arguments]             ${id}   ${testparameter}    ${resetparameter}
    Go To Profile Page
    Set Parameter (not)     ${id}  ${testparameter}     ESC
    ${disabled}             Get Element Attribute   //*[@id="${id}"]    disabled
    Should Be True          $disabled
    Reload Page
    ${parametervalue}=      Get Element Attribute   //*[@id="${id}"]    value
    Should Be Equal         ${parametervalue}  ${resetparameter}
    Set Parameter (not)     ${id}   ${resetparameter}   ENTER   #reset

Set Parameter (not)
    [Arguments]         ${id}   ${parameter}    ${key}
    Click Link          //*[@id="${id}_link"]
    Input Text          //*[@id="${id}"]    ${parameter}
    Press Keys          //*[@id="${id}"]    ${key}