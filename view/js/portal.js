/**
 * @class Ext.app.Portal
 * @extends Object
 * A sample portal layout application class.
 */
// TODO: Fill in the content panel -- no AccordionLayout at the moment
// TODO: Fix container drag/scroll support (waiting on Ext.lib.Anim)
// TODO: Fix Ext.Tool scope being set to the panel header
// TODO: Drag/drop does not cause a refresh of scroll overflow when needed
// TODO: Grid portlet throws errors on destroy (grid bug)
// TODO: Z-index issues during drag

Ext.define('Ext.app.Portal', {

    extend: 'Ext.container.Viewport',
    //requires: [ 'Ext.diag.layout.ContextItem', 'Ext.diag.layout.Context' ],
    uses: ['Ext.app.PortalPanel', 'Ext.app.PortalColumn', 'Ext.app.GridPortlet', 'Ext.app.ChartPortlet'],

    getTools: function(){
        return [{
            xtype: 'tool',
            type: 'gear',
            handler: function(e, target, panelHeader, tool){
                var portlet = panelHeader.ownerCt;
                portlet.setLoading('Loading...');
                Ext.defer(function() {
                    portlet.setLoading(false);
                }, 2000);
            }
        }];
    },

    initComponent: function() {

    	//var content = '<div class="portlet-content">'+Ext.example.shortBogusMarkup+'</div>';
    	var content = '<div class="portlet-content">AquariumPilot</div>';

        Ext.apply(this, {
            id: 'app-viewport',
            layout: {
                type: 'border',
                padding: '0 5 5 5' // pad the layout from the window edges
            },
            items: [{
                id: 'app-header',
                xtype: 'box',
                region: 'north',
                height: 60,//<p style="clear: both;"> </p>
                html: '<div style="float: left;"><img src="/view/images/48x48/logo.png"/></div><div style="padding: 10 0 0 60"><h3>AquariumPilot</h3></div>'
            },{
                xtype: 'container',
                region: 'center',
                layout: 'border',
                items: [/*{
                    id: 'app-options',
                    title: 'Options',
                    region: 'west',
                    animCollapse: true,
                    width: 200,
                    minWidth: 150,
                    maxWidth: 400,
                    split: true,
                    collapsible: true,
                    layout:{
                        type: 'accordion',
                        animate: true
                    },
                    items: [{
                        html: content,
                        title:'Navigation',
                        autoScroll: true,
                        border: false,
                        iconCls: 'nav'
                    },{
                        title:'Settings',
                        html: content,
                        border: false,
                        autoScroll: true,
                        iconCls: 'settings'
                    }]
                },*/{
                    id: 'app-portal',
                    xtype: 'portalpanel',
                    region: 'center',
                    items: [{
                        id: 'col-1',
                        items: [/*{
                            id: 'portlet-1',
                            title: 'Grid Portlet',
                            tools: this.getTools(),
                            items: Ext.create('Ext.app.GridPortlet'),
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        },*/ {
                            id: 'portlet-waterworks',
                            title: 'Waterworks',
                            iconCls: 'waterworks',
                            minWidth: 455,
                            bbar: [/*{
                        	    id: 'waterworks-bbar-label',
                        	    xtype: 'label',
                        	    style: { margin: 3 },
                        		text: 'Status: '
                        	}, */{
                        	    id: 'waterworks-bbar',
                        	    xtype: 'label',
                        		text: 'Loading...',
                        		style: { margin: 3 }
                        	}],
                            items: [{
                            	xtype: 'toolbar',
                            	items: [{
                            		id: 'waterchange',
                            		xtype: 'button',
                            		iconCls: 'btn-water',
                            		text: 'Water Change'
                            	}, {
                            		id: 'maintenance',
                            		xtype: 'button',
                            		iconCls: 'btn-maintenance',
                            		text: 'Maintenance Mode',
                            		enableToggle: true
                            	}]
                            }, {
                            	xtype: 'container',
                            	layout: {
                            		type: 'hbox',
                            		pack: 'start',
                            		align: 'stretch'
                            	},
                            	items: [{
	                            	id: 'waterworks-panel',
	                            	xtype: 'panel',
	                            	title: 'Mains AC Power',
	                            	iconCls: 'outlet',
	                            	flex: 1,
	                            	style: { margin: 5 },
	                            	minWidth: 275,
	                            	items: [{
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet1',
		                            	xtype: 'button',
		                            	text: 'Outlet 1',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet2',
		                            	xtype: 'button',
		                            	text: 'Outlet 2',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet3',
		                            	xtype: 'button',
		                            	text: 'Outlet 3',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet4',
		                            	xtype: 'button',
		                            	text: 'Outlet 4 / RO/DI UV',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet5',
		                            	xtype: 'button',
		                            	text: 'Outlet 5 - Reservoir Powerhead',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet6',
		                            	xtype: 'button',
		                            	text: 'Outlet 6 - Reservoir -> Aquarium',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet7',
		                            	xtype: 'button',
		                            	text: 'Outlet 7 - Reservoir Air Pump',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'outlet8',
		                            	xtype: 'button',
		                            	text: 'Outlet 8',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }]
	                            }, {
	                            	xtype: 'panel',
	                            	title: 'Solenoid Valves',
	                            	iconCls: 'valve',
	                            	minWidth: 200,
	                            	width: '100%',
	                            	style: { margin: 5 },
	                            	items: [{
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'rodiAquarium',
		                            	xtype: 'button',
		                            	text: 'RO/DI -> Aquarium',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'rodiReservoir',
		                            	xtype: 'button',
		                            	text: 'RO/DI -> Saltwater Reservoir',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'aquariumDrain',
		                            	xtype: 'button',
		                            	text: 'Aquarium -> Drain',
		                            	enableToggle: true
		                            }]
	                            }]
                            }, {
    							xtype: 'container',
    							layout: 'column',
    							height: 670,
    							style: { margin: 2.5 },
    							items: [{
                                	xtype: 'panel',
                                	title: 'Reservoir Temperature',
                                	width: 150,
                                	style: { margin: 2 },
                	            	html: '<div><canvas id="waterworks-reservoir-thermometer" width="110" height="350">[No canvas support]</canvas></div>'	                            	
                        		 }, {
                        			 xtype: 'panel',
                        			 title: 'Room Temperature',
                        			 width: 150,
                        			 style: { margin: 2.5 },
                        			 html: '[Need additional sensor]'
                        		 }]
                            }],
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        }]
                    }, {
                        id: 'col-2',
                        layout: 'fit',
                        items: [{
                            id: 'portlet-aquarium',
                            title: 'Aquarium',
                            tools: this.getTools(),
                            layout: 'column',
                            iconCls: 'aquarium',
                            minWidth: 455,
                            items: [{
                            	xtype: 'panel',
                            	title: 'Water Temperature',
                            	width: 150,
                            	html: '<div><canvas id="aquarium-water-temp" width="110" height="350">[No canvas support]</canvas></div>'
                            }, {
                            	xtype: 'panel',
                            	title: 'Surface Temperature',
                            	width: 150,
                            	html: '<div><canvas id="aquarium-surface-temp" width="110" height="350">[No canvas support]</canvas></div>'
                            }, {
								xtype: 'panel',
								title: 'Room Temperature',
								width: 150,
								html: '<div><canvas id="aquarium-room-temp" width="110" height="350">[No canvas support]</canvas></div>'
							}],
                                /*    
                                {
                            	columnWidth: .33,
                            	layout: 'form',
                            	items: [{
                                    xtype: 'label',
                                    text: 'Aquarium Temp: ',
                                    anchor: '95%',
                                    boxLabel: 'Known'
                            	}],
                            	columnWidth: .33,
                            	layout: 'form',
                            	items: [{
                            		id: 'aquarium-temp',
                            		xtype: 'label',
                            		text: 'N/A'
                            	}],
                            	columnWidth: .33,
                            	layout: 'form',
                            	items: [{
                            		xtype: 'label',
                            		text: 'test'
                            	}*/
                            
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        }]
                    },{
                        id: 'col-3',
                        items: [
                                /*{
                            id: 'portlet-4',
                            title: 'Stock Portlet',
                            tools: this.getTools(),
                            items: Ext.create('Ext.app.ChartPortlet'),
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        }*/]
                    }]
                }]
            }]
        });
        this.callParent(arguments);
    },

    onPortletClose: function(portlet) {
        this.showMsg('"' + portlet.title + '" was removed');
    },

    showMsg: function(msg) {
        var el = Ext.get('app-msg'),
            msgId = Ext.id();

        this.msgId = msgId;
        el.update(msg).show();

        Ext.defer(this.clearMsg, 3000, this, [msgId]);
    },

    clearMsg: function(msgId) {
        if (msgId === this.msgId) {
            Ext.get('app-msg').hide();
        }
    }
});
