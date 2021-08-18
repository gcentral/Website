*** Settings ***
Documentation       Test the site for invalid login attempts
Suite Setup         Open Browser To Login Page
Suite Teardown      Close Browser
Test Setup          Go To Login Page
Test Template       Login With Invalid Credentials Should Fail
Resource            resource.robot

*** Test Cases ***              USER NAME       PASSWORD
Invalid Username                invalid         ${VALID PASSWORD}
Invalid Password                ${VALID USER}   invalid
Invalid Username And Password   invalid         invalid
Empty Username                  ${EMPTY}        ${VALID PASSWORD}
Empty Password                  ${VALID USER}   ${EMPTY}
Empty Username And Password     ${EMPTY}        ${EMPTY}

*** Keywords ***
Login With Invalid Credentials Should Fail
    [Arguments]     ${username}     ${password}
    Input Username  ${username}
    Input Password  ${password}
    Submit Credentials
    Login Should Have Failed

Login Should Have Failed
    Location Should Be      ${LOGIN URL}
    Login Page Should Be Open