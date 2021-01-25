//[gridstackjs Javascript]

$(function () {
    "use strict";

	    $('.grid-stack').gridstack({
            width: 12,
            alwaysShowResizeHandle: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            resizable: {
                handles: 'e, se, s, sw, w'
            }
        });
    
		var options = {
                float: true
            };
            $('.grid-stack').gridstack(options);

            new function () {
                this.items = [
                    {x: 0, y: 0, width: 2, height: 2},
                    {x: 3, y: 1, width: 1, height: 2},
                    {x: 4, y: 1, width: 1, height: 1},
                    {x: 2, y: 3, width: 3, height: 1},
//                    {x: 1, y: 4, width: 1, height: 1},
//                    {x: 1, y: 3, width: 1, height: 1},
//                    {x: 2, y: 4, width: 1, height: 1},
                    {x: 2, y: 5, width: 1, height: 1}
                ];

                this.grid = $('.grid-stack').data('gridstack');

                this.addNewWidget = function () {
                    var node = this.items.pop() || {
                                x: 12 * Math.random(),
                                y: 5 * Math.random(),
                                width: 1 + 3 * Math.random(),
                                height: 1 + 3 * Math.random()
                            };
                    this.grid.addWidget($('<div><div class="grid-stack-item-content" /><div/>'),
                        node.x, node.y, node.width, node.height);
                    return false;
                }.bind(this);

                $('#add-new-widget').click(this.addNewWidget);
            };
	
		  ko.components.register('dashboard-grid', {
            viewModel: {
                createViewModel: function (controller, componentInfo) {
                    var ViewModel = function (controller, componentInfo) {
                        var grid = null;

                        this.widgets = controller.widgets;

                        this.afterAddWidget = function (items) {
                            if (grid == null) {
                                grid = $(componentInfo.element).find('.grid-stack').gridstack({
                                    auto: false
                                }).data('gridstack');
                            }

                            var item = _.find(items, function (i) { return i.nodeType == 1 });
                            grid.addWidget(item);
                            ko.utils.domNodeDisposal.addDisposeCallback(item, function () {
                                grid.removeWidget(item);
                            });
                        };
                    };

                    return new ViewModel(controller, componentInfo);
                }
            },
            template:
                [
                    '<div class="grid-stack" data-bind="foreach: {data: widgets, afterRender: afterAddWidget}">',
                    '   <div class="grid-stack-item" data-bind="attr: {\'data-gs-x\': $data.x, \'data-gs-y\': $data.y, \'data-gs-width\': $data.width, \'data-gs-height\': $data.height, \'data-gs-auto-position\': $data.auto_position}">',
                    '       <div class="grid-stack-item-content"><button class="btn btn-sm btn-danger" data-bind="click: $root.deleteWidget"><i class="fa fa-trash"></i></button></div>',
                    '   </div>',
                    '</div> '
                ].join('')
			});

			$(function () {
				var Controller = function (widgets) {
					var self = this;

					this.widgets = ko.observableArray(widgets);

					this.addNewWidget = function () {
						this.widgets.push({
							x: 0,
							y: 0,
							width: Math.floor(1 + 3 * Math.random()),
							height: Math.floor(1 + 3 * Math.random()),
							auto_position: true
						});
						return false;
					};

					this.deleteWidget = function (item) {
						self.widgets.remove(item);
						return false;
					};
				};

				var widgets = [
					{x: 0, y: 0, width: 2, height: 2},
					{x: 2, y: 0, width: 4, height: 2},
					{x: 6, y: 0, width: 2, height: 4},
					{x: 1, y: 2, width: 4, height: 2}
				];

				var controller = new Controller(widgets);
				ko.applyBindings(controller);
			});
	
  }); // End of use strict