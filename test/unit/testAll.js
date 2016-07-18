/**
 * Test cases for Unit Testing using tdd [Test Driven Development] interface of mocha
 * Autor: Ridwan Shariffdeen <ridwan@orangehrmlive.com>
 *
 */



'use strict';
process.env.NODE_ENV = 'test';


function importTest(name, path) {
    describe(name, function () {
        require(path);
    });
}

describe("Test Suite", function () {

    before(function (done) {
        //any generic function to do before all the test cases i.e. resetting database
       

    });

    beforeEach(function () {
        //any generic function to do before each test case
    });

    /* Test Cases */
    importTest("test-trialInstanceService", './tdd/service/test-mailService');
    importTest("test-trialInstanceService", './tdd/service/test-dockerService');
    importTest("test-trialInstanceService", './tdd/service/test-trialInstanceService');


    afterEach(function () {
        //any generic function to be executed after each test case
    });

    after(function () {
        //any generic function to be executed after all test cases are done

    });
});

