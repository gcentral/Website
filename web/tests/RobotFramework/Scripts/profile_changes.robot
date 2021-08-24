*** Settings ***
Documentation   Test all the different changes to the user data
Suite Setup     Run Keywords    Open Browser To Login Page  Log In
Suite Teardown  Close Browser 
Test Template   Test Parameter Change      
Resource        resource.robot

*** Test Cases ***      ID          TESTPARAMETER   RESETPARAMETER
Change Full Name        fname       Steve Harris    GCentral Developer
Change Display Name     dname       SHarris         GCentralDev
Change Location         location    Nassau          The space between purpose and action.

*** Keywords ***
Test Parameter Change
    [Arguments]         ${id}   ${testparameter}    ${resetparameter}
    Go To Profile Page
    Set Parameter       ${id}  ${testparameter}
    Reload Page
    ${parametervalue}=  Get Element Attribute   //*[@id="${id}"]    value
    Should Be Equal     ${parametervalue}  ${testparameter}
    Set Parameter       ${id}   ${resetparameter}                           #reset

Set Parameter
    [Arguments]         ${id}   ${parameter}
    Click Link          //*[@id="${id}_link"]
    Input Text          //*[@id="${id}"]    ${parameter}
    Press Keys          //*[@id="${id}"]    ENTER