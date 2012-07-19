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
                            id: 'portlet-2',
                            title: 'GFCI Outlets',
                            //tools: this.getTools(),
                            items: [{
                            	id: 'gfci-outlets-panel',
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
	                            	text: 'Socket 7 - Air Pump',
	                            	enableToggle: true
	                            }, {
	                            	id: 'outlet8',
	                            	xtype: 'button',
	                            	text: 'Socket 8',
	                            	enableToggle: true
	                            },  {
	                            	id: 'rodiAquarium',
	                            	xtype: 'button',
	                            	text: 'RO/DO -> Aquarium',
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
	                            	id: 'p1',
	                            	xtype: 'container',
	                            	html: '<div><canvas id="saltwater-reservoir-thermometer" width="150" height="350">[No canvas support]</canvas></div>'	                            	
                            	}]
                            }],
                            listeners: {
                                'close': Ext.bind(this.onPortletClose, this)
                            }
                        }]
                    },{
                        id: 'col-2',
                        items: [{
                            id: 'portlet-3',
                            title: 'Portlet 3',
                            tools: this.getTools(),
                            html: '<div class="portlet-content">'+content+'</div>',
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