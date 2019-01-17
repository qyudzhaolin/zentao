/**
 * Load module, stories and members. 
 * 
 * @param  int    $projectID 
 * @access public
 * @return void
 */
function loadAll(projectID)
{
    if(!changeProjectConfirmed)
    {
        firstChoice = confirm(confirmChangeProject);
        changeProjectConfirmed = true;    // Only notice the user one time.
    }
    if(changeProjectConfirmed && firstChoice)
    {
        loadModuleMenu(projectID); 
        loadProjectStories(projectID);
        loadProjectMembers(projectID);
    }
    else
    {
        $('#project').val(oldProjectID);
        $("#project").trigger("chosen:updated");
    }
}

/**
 * Load module of the project. 
 * 
 * @param  int    $projectID 
 * @access public
 * @return void
 */
function loadModuleMenu(projectID)
{
    var link = createLink('tree', 'ajaxGetOptionMenu', 'rootID=' + projectID + '&viewtype=task');
    $('#moduleIdBox').load(link, function(){$('#module').chosen();});
}

/**
 * Load stories of the project. 
 * 
 * @param  int    $projectID 
 * @access public
 * @return void
 */
function loadProjectStories(projectID)
{
    var link = createLink('story', 'ajaxGetProjectStories', 'projectID=' + projectID + '&productID=0&branch=0&moduleID=0&storyID=' + oldStoryID);
    $('#storyIdBox').load(link, function(){$('#story').chosen();});
}

/**
 * Load team members of the project. 
 * 
 * @param  int    $projectID 
 * @access public
 * @return void
 */
function loadProjectMembers(projectID)
{
    var link = createLink('project', 'ajaxGetMembers', 'projectID=' + projectID + '&assignedTo=' + '');
    $('#assignedToIdBox').load(link, function(res){
        $('#assignedToIdBox').find('select').chosen()
    });
}

