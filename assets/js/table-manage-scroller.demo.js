
var handleDataTableScroller = function() {
	"use strict";
    
    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            sAjaxSource:    "./assets/users.json",
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
                              "bSortable": false,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<span class="badge badge-inverse"><a href="user/'+ url +'" class="text-white" style="text-decoration:none;"><strong>' + url + '</strong></a></span>';
                                                                        }
                            },
                            {
                              "aTargets": [ 1 ],
                              "bSortable": false,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<a class="text-inverse"><strong>' + url + '</strong></a>';
                                                                        }
                            },
                            {
                              "aTargets": [ 2 ],
                              "bSortable": false,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<a class="text-inverse"><strong>' + url + '</strong></a>';
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