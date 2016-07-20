
var handleDataTableScrollers = function() {
	"use strict";
    
    if ($('#data-tables').length !== 0) {
        $('#data-tables').DataTable({
            sAjaxSource:           "assets/cv.json",
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
                                                                            return  '<a class="text-inverse"><strong>' + url + '</strong></a>';
                                                                        }
                            },
                            {
                              "aTargets": [ 5 ],
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
                              "aTargets": [ 6 ],
                              "bSortable": false,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<a onclick="editg('+url+')" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>\n\
                                                                                     <a href="delc/'+ url +'" class="btn btn-xs btn-warning "><i class="fa fa-trash-o"></i></a>';
                                                                        }
                            }
                           ],
            
        });
    }
};

var TableManageScrollers = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableScrollers();
        }
    };
}();