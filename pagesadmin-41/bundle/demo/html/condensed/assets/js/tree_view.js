/* ============================================================
 * Tree View
 * Render a tree view using jQuery Dynatree plugin
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
(function($) {

    'use strict';

    $(document).ready(function() {
        // Treeview hierarchy configuration
        var treeData = [{
            title: "item1 with key and tooltip",
            tooltip: "Look, a tool tip!"
        }, {
            title: "item2: selected on init",
            select: true
        }, {
            title: "Folder",
            isFolder: true,
            key: "id3",
            children: [{
                title: "Sub-item 3.1",
                children: [{
                    title: "Sub-item 3.1.1",
                    key: "id3.1.1"
                }, {
                    title: "Sub-item 3.1.2",
                    key: "id3.1.2"
                }]
            }, {
                title: "Sub-item 3.2",
                children: [{
                    title: "Sub-item 3.2.1",
                    key: "id3.2.1"
                }, {
                    title: "Sub-item 3.2.2",
                    key: "id3.2.2"
                }]
            }]
        }, {
            title: "Document with some children (expanded on init)",
            key: "id4",
            expand: true,
            children: [{
                title: "Sub-item 4.1 (active on init)",
                activate: true,
                children: [{
                    title: "Sub-item 4.1.1",
                    key: "id4.1.1"
                }, {
                    title: "Sub-item 4.1.2",
                    key: "id4.1.2"
                }]
            }, {
                title: "Sub-item 4.2 (selected on init)",
                select: true,
                children: [{
                    title: "Sub-item 4.2.1",
                    key: "id4.2.1"
                }, {
                    title: "Sub-item 4.2.2",
                    key: "id4.2.2"
                }]
            }, {
                title: "Sub-item 4.3 (hideCheckbox)",
                hideCheckbox: true
            }, {
                title: "Sub-item 4.4 (unselectable)",
                unselectable: true
            }]
        }];

        $("#default-tree").dynatree({
            fx: {
                height: "toggle",
                duration: 200
            } //Slide down animation
        });
        $("#drag-tree").dynatree({
            fx: {
                height: "toggle",
                duration: 200
            }, //Slide down animation
        });

        $("#check-tree").dynatree({
            checkbox: true,
            selectMode: 2,
            children: treeData,
            onSelect: function(select, node) {
                // Display list of selected nodes
                var selNodes = node.tree.getSelectedNodes();
                // convert to title/key array
                var selKeys = $.map(selNodes, function(node) {
                    return "[" + node.data.key + "]: '" + node.data.title + "'";
                });
                $("#echoSelection2").text(selKeys.join(", "));
            },
            onClick: function(node, event) {
                // We should not toggle, if target was "checkbox", because this
                // would result in double-toggle (i.e. no toggle)
                if (node.getEventTargetType(event) == "title")
                    node.toggleSelect();
            },
            onKeydown: function(node, event) {
                if (event.which == 32) {
                    node.toggleSelect();
                    return false;
                }
            },
            // The following options are only required, if we have more than one tree on one page:
            cookieId: "dynatree-Cb2",
            idPrefix: "dynatree-Cb2-"
        });

        $("#radio-tree").dynatree({
            checkbox: true,
            // Override class name for checkbox icon:
            classNames: {
                checkbox: "dynatree-radio"
            },
            selectMode: 1,
            children: treeData,
            onActivate: function(node) {
                $("#echoActive1").text(node.data.title);
            },
            onSelect: function(select, node) {
                // Display list of selected nodes
                var s = node.tree.getSelectedNodes().join(", ");
                $("#echoSelection1").text(s);
            },
            onDblClick: function(node, event) {
                node.toggleSelect();
            },
            onKeydown: function(node, event) {
                if (event.which == 32) {
                    node.toggleSelect();
                    return false;
                }
            },
            // The following options are only required, if we have more than one tree on one page:
            //      initId: "treeData",
            cookieId: "dynatree-Cb1",
            idPrefix: "dynatree-Cb1-"
        });
    });

})(window.jQuery);