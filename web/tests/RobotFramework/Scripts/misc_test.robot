*** Settings ***
Documentation       Any test that doesn't fit another category
Suite Setup         Open Browser To Home Page
Suite Teardown      Close Browser
Test Setup          Log Out
Resource            resource.robot

*** Test Cases ***
Test profile without being logged in
    Go To   ${PROFILE URL}
    Element Text Should Be  //h2    Please log in to see this page!

