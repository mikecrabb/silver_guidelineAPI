# Silver Guidelines Applications

This API has been created based on backward engineering the current WGAG guidelines. This can be used to generate prototype applications for displaying accessibility information going forward in Silver Development

## Available Routes
All routes are GET, there is no option to PUT, DELETE, or UDPATE information in this API. All API information is returned in JSON array.

Route | Route Example | Route Description
------|-------|----
**/** | / | Used to check API is active. Should return **Welcome to the Silver Prototype API**
**/successCriteria/*[criteriaID]*** | /successCriteria/1.1.1 | Returns an individual Success Criteria
**/exceptions/*[criteriaID]*** | /exceptions/1.1.1 | Returns all exceptions for a given successCriteriaID
**/additionalInformation/*[criteriaID]*** | additionalInformation/1.1.1 | returns all additional information for a given successCriteriaID
**/benefits/*[criteriaID]*** | benefits/1.1.1 | returns a list of benefits associated with a given successCriteria
**/realWorldExamples/*[criteriaID]*** | /realworldExamples/1.1.1 | returns all real world examples associated with a given successCriteriaID
**/failures/*[criteriaID]*** | /failures/1.1.1 | returns all failures attached to a given successCriteriaID
**/failureExamples/*[failureID]*** | /failureExamples/F3 | returns all failure examples attached to a given failureID
**/passingTechnique** | /passingTechnique | returns a list of all passing techniques
**/passingTechnique/*[techniqueID]*** | /passingTechnique/ARIA6 | returns a single passingTechnique
**/technology** | /technology | returns list of all technology
**/technology/*[technologyID]*** | /technology/3 | returns a single technology
**/passingTest/*[techniqueID]*** | /passingTest/ARIA3 | returns tests that can be used to test a given technique
**/passingTechniqueExamples/*[techniqueID]*** | /passingTechniqueExample/ARIA6 | returns list of examples for given technique
**/criteriaPassingTechniques/*[criteriaID]*** | criteriaPassingTechniques/1.1.1 | returns IDs for all passingTechniques for a given criteria


## Routes Still to Make
- [ ] Please add as necessary
