var _token = $("#_token").val();
var BASE_URL = $("#baseurlInput").val();

jQuery(document).ready(function () {
    var _userId = $("#_userId").val();
    var _server_time = $("#_serverTime").val();
    var project_data = [];

    InitComponents();
    RefreshData();
    /************************/
    function InitComponents() {
        CreateProjectList();

        function CreateProjectList() {
            var actionrenderer = function (row, datafield, value) {
                return  '<div style="margin-left: 30px; margin-top: 13px;">' +
                        '   <a href="javascript:projectDetail('+value+')" class="btn btn-circle btn-icon-only">' +
                        '       <i class="icon-eye" class="btn btn-circle btn-icon-only btn-default">' +
                        '       </i>' +
                        '   </a>' +
                        '   </div>';
            }
            $("#userListTable").jqxGrid(
                {
                    width: '100%',
                    rowsheight: 60,
                    theme: 'metro',
                    altrows: true,
                    pageable: true,
                    sortable: false,
                    autoheight: true,
                    
                    columns: [
                        {text: 'Project Name', datafield: 'project_name', align: 'center', cellsalign: 'center'},
                        {text: 'Client Name', datafield: 'client_name', align: 'center', cellsalign:'center'},
                        {text: 'Actions', datafield: 'id', align: 'center', cellsalign: 'center', width: 100, cellsrenderer: actionrenderer},
                    ]
                });
        }
    }
    function RefreshData() {

        $.ajax({
            method: "GET",
            url: BASE_URL + "/projectListData"
        }).success(function (response) {
            project_data = response;
            RefreshProjects();
        }).error(function (response) {
            bootbox.alert("Data error.");
        });
    }


    function RefreshProjects() {
        // prepare the data
        var source =
        {
            datatype: "json",
            datafields: [
                {name: 'project_name'},
                {name: 'client_name'},
                {name: 'id'},
            ],
            id: 'id',
            localdata: project_data,
        };
        var dataAdapter = new $.jqx.dataAdapter(source);
        $('#userListTable').jqxGrid({source: dataAdapter});
    }
    /************************/
});

function projectDetail(id){
    location.assign(BASE_URL + "/project/detail/"+id);
}

