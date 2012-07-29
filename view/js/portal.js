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

    initComponent: function(){
        
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
                items: [{
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
                },{
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
                            tools: this.getTools(),
                            width: 400,
                            items: [{
                            	xtype: 'toolbar',
                            	items: [{
                            		xtype: 'button',
                            		iconCls: 'btn-water',
                            		text: 'Water Change',
                            		listeners: {
                            			click: function(btn, event) {
		                            		Ext.Msg.prompt('Water Change', 'How many gallons?', function(btn, text){
		                            		    if (btn == 'ok') {
		                            		    	if(isNaN(text)) {
		                            		    		Ext.Msg.show({
		                            		    		     title:'Error',
		                            		    		     msg: 'Number required.',
		                            		    		     buttons: Ext.Msg.OK,
		                            		    		     icon: Ext.Msg.ERROR
		                            		    		});
		                            		    		return false;
		                            		    	}
		                            		    	if(text <= 0) {
		                            		    		Ext.Msg.show({
		                            		    		     title:'Error',
		                            		    		     msg: 'Gallons must be greater than zero.',
		                            		    		     buttons: Ext.Msg.OK,
		                            		    		     icon: Ext.Msg.ERROR
		                            		    		});
		                            		    		return false;
		                            		    	}
		                            		    	Ext.Ajax.request({
		                                                method: 'GET',
		                                                url: '/index.php/WaterworksController/waterchange/' + text
		                                        	});
		                            		    }
		                            		});
                            			}
                            		}
                            	}]
                            }, {
                            	id: 'waterworks-panel',
                            	xtype: 'panel',
                            	title: '120 VAC Receptacles',
                            	style: {
                            		paddingTop: 5
                            	},
                            	items: [{
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet1',
	                            	xtype: 'button',
	                            	text: 'Socket 1',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet2',
	                            	xtype: 'button',
	                            	text: 'Socket 2',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet3',
	                            	xtype: 'button',
	                            	text: 'Socket 3',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet4',
	                            	xtype: 'button',
	                            	text: 'Socket 4 / RO/DI UV',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet5',
	                            	xtype: 'button',
	                            	text: 'Socket 5 - Reservoir Powerhead',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet6',
	                            	xtype: 'button',
	                            	text: 'Socket 6 - Reservoir -> Aquarium',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet7',
	                            	xtype: 'button',
	                            	text: 'Socket 7 - Reservoir Air Pump',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'container',
	                            	height: 5
	                            }, {
	                            	id: 'outlet8',
	                            	xtype: 'button',
	                            	text: 'Socket 8',
	                            	iconCls: 'outlet',
	                            	enableToggle: true
	                            }, {
	                            	xtype: 'panel',
	                            	title: 'Solenoid Valves',
	                            	items: [{
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'rodiAquarium',
		                            	xtype: 'button',
		                            	text: 'RO/DI -> Aquarium',
		                            	iconCls: 'valve',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'rodiReservoir',
		                            	xtype: 'button',
		                            	text: 'RO/DI -> Saltwater Reservoir',
		                            	iconCls: 'valve',
		                            	enableToggle: true
		                            }, {
		                            	xtype: 'container',
		                            	height: 5
		                            }, {
		                            	id: 'aquariumDrain',
		                            	xtype: 'button',
		                            	text: 'Aquarium -> Drain',
		                            	iconCls: 'valve',
		                            	enableToggle: true
		                            }]
	                            }, {
									xtype: 'container',
									layout: 'column',
									style: {
	                            		paddingTop: 5
	                            	},
									items: [{
		                            	xtype: 'panel',
		                            	title: 'Reservoir Temperature',
		                            	width: 150,
	                	            	html: '<div><canvas id="waterworks-reservoir-thermometer" width="110" height="350">[No canvas support]</canvas></div>'	                            	
                            		 }, {
                            			 xtype: 'panel',
                            			 title: 'Room Temperature',
                            			 width: 150,
                            			 html: '[Need additional sensor]'
                            		 }]
	                            }]
                            }],
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        }]
                    },{
                        id: 'col-2',
                        layout: 'fit',
                        items: [{
                            id: 'portlet-aquarium',
                            title: 'Aquarium',
                            tools: this.getTools(),
                            layout: 'column',
                            minWidth: 450,
                            items: [{
                            	xtype: 'panel',
                            	title: 'Water Temperature',
                            	width: 150,
                            	html: '<div><canvas id="aquarium-water-thermometer" width="110" height="350">[No canvas support]</canvas></div>'
                            }, {
                            	xtype: 'panel',
                            	title: 'Surface Temperature',
                            	width: 150,
                            	html: '<div><canvas id="aquarium-air-thermometer" width="110" height="350">[No canvas support]</canvas></div>'
                            }, {
								xtype: 'panel',
								title: 'Room Temperature',
								width: 150,
								html: '[Need additional sensor]',
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
