/**
 * Test cases for testing bdd [Behavioral Driven Development] using default mocha interface
 * Autor: Ridwan Shariffdeen <ridwan@orangehrmlive.com>
 *
 */


function importTest(name, path) {
    describe(name, function () {
        require(path);
    });
}

describe("Test Suite", function () {

    before(function () {
        //any generic function to do before all the test cases i.e. resetting database

    });

    beforeEach(function () {
        //any generic function to do before each test case
    });

    /* Test Cases */
    importTest("test-loginPage", './bdd/integration/test-loginPage');


    afterEach(function () {
        //any generic function to be executed after each test case
    });

    after(function () {
        //any generic function to be executed after all test cases are done

    });
});

