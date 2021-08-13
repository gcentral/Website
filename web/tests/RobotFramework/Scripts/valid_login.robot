*** Settings ***
Documentation   Test if a user is able to log in using a
...             valid user pwd combination
Resource        resource.robot

*** Test Cases ***
Valid Login
    Open Browser To Login Page
    Input Username  test@gcentral.org
    Input Password  123456
    Submit Credentials
    Welcome Page Should Be Open
    [Teardown]      Close Browser