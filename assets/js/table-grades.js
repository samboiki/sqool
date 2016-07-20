
var handleDataTableScroller = function() {
	"use strict";
    
    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            sAjaxSource:           "assets/gv.json",
            deferRender:    true,
            scrollY:        300,
            scrollCollapse: true,
            scroller:       true,
            responsive: true,
            aoColumnDefs :[
                            {
                            "sTitle":"Site name",
                            "aTargets": [ "site_name" ]
                            },
                            {
                              "aTargets": [ 0 ],
                              "bSortable": true,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<span class="badge badge-inverse"><a href="user/'+ url +'" class="text-white" style="text-decoration:none;"><strong>' + url + '</strong></a></span>';
                                                                        }
                            },
                            {
                              "aTargets": [ 1 ],
                              "bSortable": true,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<a class="text-inverse"><strong> Grade ' + url + '</strong></a>';
                                                                        }
                            },
                            {
                              "aTargets": [ 2 ],
                              "bSortable": true,
                              "mRender": function ( url, type, full )  {    if      (url < 30){
                                                                                 return  '<a class="text-inverse"><strong><span class="badge badge-danger badge-square">' + url + '</span></strong></a>';
                                                                                        }
                                                                            else if (url < 50){
                                                                                 return  '<a class="text-inverse"><strong><span class="badge badge-warning badge-square">' + url + '</span></strong></a>';
                                                                                        }
                                                                            else {
                                                                                 return  '<a class="text-inverse"><strong><span class="badge badge-success badge-square">' + url + '</span></strong></a>';
                                                                                       }
                                                                        }
                            },
                            {
                              "aTargets": [ 3 ],
                              "bSortable": false,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<a onclick="editg('+url+')" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>\n\
                                                                                     <a href="delg/'+ url +'" class="btn btn-xs btn-warning "><i class="fa fa-trash-o"></i></a>';
                                                                        }
                            }
                           ],
            
        });
    }
};

var TableManageScroller = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableScroller();
        }
    };
}();