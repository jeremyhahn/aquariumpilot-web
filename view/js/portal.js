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
                height: 40,
                html: 'AquariumPilot'
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
                            	id: 'waterworks-panel',
                            	items: [{
	                            	id: 'outlet1',
	                            	xtype: 'button',
	                            	text: 'Socket 1',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet2',
	                            	xtype: 'button',
	                            	text: 'Socket 2',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet3',
	                            	xtype: 'button',
	                            	text: 'Socket 3',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet4',
	                            	xtype: 'button',
	                            	text: 'Socket 4 / RO/DI UV',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet5',
	                            	xtype: 'button',
	                            	text: 'Socket 5 - Reservoir Powerhead',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet6',
	                            	xtype: 'button',
	                            	text: 'Socket 6 - Reservoir -> Aquarium',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet7',
	                            	xtype: 'button',
	                            	text: 'Socket 7 - Reservoir Air Pump',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet8',
	                            	xtype: 'button',
	                            	text: 'Socket 8',
	                            	enableToggle: true
	                            },  {
	                            	id: 'rodiAquarium',
	                            	xtype: 'button',
	                            	text: 'RO/DI -> Aquarium',
	                            	enableToggle: true
	                            },  {
	                            	id: 'rodiReservoir',
	                            	xtype: 'button',
	                            	text: 'RO/DI -> Saltwater Reservoir',
	                            	enableToggle: true
	                            },  {
	                            	id: 'aquariumDrain',
	                            	xtype: 'button',
	                            	text: 'Aquarium -> Drain',
	                            	enableToggle: true
	                            }, {
									xtype: 'container',
									layout: 'column',
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
