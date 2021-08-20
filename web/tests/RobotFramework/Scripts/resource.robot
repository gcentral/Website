*** Settings ***
Documentation       This resource file defines keywords,
...                 which can be used in the other test files.
Library             SeleniumLibrary

*** Variable ***
${SERVER}           localhost
${BROWSER}          Chrome
${DELAY}            0
${VALID USER}       test@gcentral.com
${VALID PASSWORD}   123456
${HOME PAGE}        http://${SERVER}/
${LOGIN URL}        http://${SERVER}/login
${LOGOUT URL}       http://${SERVER}/logout
${PROFILE URL}      http://${SERVER}/profile

*** Keywords ***
Open Browser To Home Page
    Open Browser    ${HOME PAGE}    ${BROWSER}
    Maximize Browser Window
    Set Selenium Speed  ${DELAY}
    Home Page Should Be Open

Open Browser To Login Page
    Open Browser    ${LOGIN URL}    ${BROWSER}
    Maximize Browser Window
    Set Selenium Speed  ${DELAY}
    Login Page Should Be Open

Home Page Should Be Open
    Title Should Be     Home - GCentral.org

Login Page Should Be Open
    Title Should Be     Login - GCentral.org

Go To Login Page
    Go To   ${LOGIN URL}
    Login Page Should Be Open

Go To Profile Page
    Go To   ${PROFILE URL}
    Profile Page Should Be Open

Log Out
    Go To   ${LOGOUT URL}
    Home Page Should Be Open

Log In
    Input Username  test@gcentral.org
    Input Password  123456
    Submit Credentials
    Welcome Page Should Be Open

Input Username
    [Arguments]     ${username}
    Input Text      email   ${username}

Input Password
    [Arguments]     ${password}
    Input Text     password    ${password}

Submit Credentials
    Click Button    submit

Welcome Page Should Be Open
    Location Should Be  ${HOME PAGE}
    Title Should Be     Home - GCentral.org

Profile Page Should Be Open
    Location Should Be  ${PROFILE URL}
    Title Should Be     Profile - GCentral.org