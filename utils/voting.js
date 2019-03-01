var aliases = {
    'Intel': ['INTEL CORPORATION', 'INTEL CORP','INTEL CORP.'],
    'UTK': ['UNIVERSITY OF TENNESSEE, KNOXVILLE', 'UNIVERSITY OF TENNESSEE', 'THE UNIVERSITY OF TENNESSEE', 'U TENNESSEE'],
    'UTC': ['UNIVERSITY OF TENNESSEE, CHATTANOOGA', 'UNIVERSITY OF TENNESSEE CHATTANOOGA', 'UNIVERSITY OF TENNESSEE AT CHATTANOOGA'],
    'Argonne': ['ANL', 'ARGONNE NATIONAL LABORATORY', 'ARGONNE NATIONAL LAB'],
    'Cisco': ['CISCO SYSTEMS INC.', 'CISCO SYSTEMS, INC.', 'CISCO SYSTEMS'],
    'Microsoft': ['MICROSOFT INC.'],
    'Livermore': ['LLNL', 'LAWRENCE LIVERMORE NATIONAL LABORATORY', 'LAWRENCE LIVERMORE NATIONAL LAB', 'LAWRENCE LIVERMORE NATL.  LAB.','LAWRENCE LIVERMORE NATIONAL LAB.'],
    'Los Alamos': ['LANL', 'LOS ALAMOS NATIONAL LABORATORY', 'LOS ALAMOS NATIONAL LAB'],
    'Berkeley': ['LBL', 'LAWRENCE BERKELEY NATIONAL LABORATORY', 'LAWRENCE BERKELEY LAB', 'LBNL', 'LAWRENCE BERKELEY NATIONAL LAB'],
    'Sandia': ['SNL', 'SANDIA NATIONAL LABORATORY', 'SANDIA NATIONAL LAB', 'SANDIA NATIONAL LABORATORIES', 'SANDIA'],
    'Oak Ridge': ['ORNL', 'OAK RIDGE NATIONAL LABORATORY', 'OAK RIDGE NATIONAL LAB'],
    'Edinburgh': ['EPCC', 'EPCC, THE UNIVERSITY OF EDINBURGH', 'UNIVERISTY OF EDINBURGH'],
    'Mellanox': ['MELLANOX TECHNOLOGIES', 'MELLANOX TECHNOLOGIES INC', 'MELLANOX TECHNOLOGIES, INC.'],
    'Fujitsu': [],
    'Radcliffe': [],
    'NVIDIA': ['NVIDIA USA'],
    'OSU': ['THE OHIO STATE U.', 'THE OHIO STATE UNIVERSITY', 'OHIO STATE UNIVERSITY'],
    'IBM': [],
    'Auburn': ['AUBURN U', 'AUBURN UNIVERSITY'],
    'RIKEN': ['RIKEN AICS'],
    'INRIA': ['BORDEAUX INP/INRIA', "BORDEAUX INP"],
    'UIUC': ['UNIVERSITY OF ILLINOIS URBANA-CHAMPAIGN', 'UNIVERSITY OF ILLINOIS', 'NCSA/UIUC', 'NCSA'],
    'NEC': ['NEC COOPERATION', 'NEC DEUTSCHLAND GMBH'],
    'Paratools': ['PARATOOLS SAS', 'PARATOOLS, INC.'],
    'CEA': [],
    'Forschungszentrum': ['FORSCHUNGSZENTRUM JÜLICH','FORSCHUNGSZENTRUM JÜLICH GMBH'],
    'HLRS': ["UNIVERSITY OF STUTTGART, HLRS", "HLRS, UNIVERSITY OF STUTTGART"],
    'Kyushu': ['KYUSHU UNIVERSITY', 'KYUSHU U.', 'U. KYUSHU'],
    'Cray': ['CRAY INC'],
    'UTEP': ['THE UNIVERSITY OF TEXAS AT EL PASO'],
    'TACC': ['THE TEXAS ADVANCED COMPUTING CENTER'],
    'Lenovo': [],
    'UAB': ['U ALABAMA BIRMINGHAM','UNIVERSITY OF ALABAMA AT BIRMINGHAM'],
    'HDF': ['HDF GROUP'],
    'KTH': ['KTH ROYAL INSTITUTE OF TECHNOLOGY'],
    'ETH Zurich': ['ETH', 'ETH ZURICH','ETH ZÜRICH'],
    'ATOS/BULL': ['BULL','ATOS'],
    'U Oregon': ['UNIVERSITY OF OREGON'],
    'TU Munich': ['TUM', 'TU MUNICH', 'TU-MUNICH', 'TECHNICAL UNIVERSITY OF MUNICH'],
    'U Innsbruck': ['UNIVERSITY OF INNSBRUCK'],
    'RWTH': ['RWTH AACHEN UNIVERSITY'],
    'PAR-TEC': [],
    'Hewlett Packard Enterprise': ['HPE'],
    'TU Wien': [],
    'ARM': [],
    'BSC': ['BARCELONA SUPERCOMPUTING CENTER'],
}

var vote_types = {
    "no-no": "No no vote",
    "1st": "First vote",
    "2nd": "Second vote",
    "Errata": "Errata vote",
    "Procedure": "Procedure vote",
    "First and Only": "First and Only vote",
}

var month_names = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];

current_month = 03;
current_year = 2019;
var orgs = {};
var votes = {};
var registered_orgs;
var ooe_orgs;
var imove_orgs;
var non_voting_orgs = {};
var meetings_calculated = 0;
var items = [];
var targets = [];

function zeroFill( number, width )
{
    width -= number.toString().length;
    if ( width > 0 ) {
        return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
    }
    return number + ""; // always return a string
}

function findAlias(org) {
    for (var alias in aliases) {
        if (alias.toUpperCase() == org.toUpperCase() ||
            aliases[alias].includes(org.toUpperCase())) {
            return alias;
        }
    }
    window.alert("Org " + org.toUpperCase() + ' not found. Add to alias list in voting.js');
}

function uniq(a) {
    return a.sort().filter(function(item, pos, ary) {
        return !pos || item != ary[pos - 1];
    })
}

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

function finishVote() {
    var output = "";

    output += "<h3>Copy below text to meetings/" + current_year + "/" +
        zeroFill(current_month,2) + "/votes.md</h3>\n<hr>\n";

    output += '<pre>';

    output += "registered: " + registered_orgs + "\n";
    output += "ooe: " + ooe_orgs + "\n";
    output += "imove: " + imove_orgs + "\n";

    output += '</pre>';
    output += "<hr>\n"

    output += "<h3>Copy below text to _data/meetings/" + current_year + "/" +
        zeroFill(current_month,2) + "/votes.csv</h3>\n<hr>\n";

    output += '<pre>';

    output += "topic,type,yes,no,abstain,missed\n";

    for (var i = 0; i < votes.data.length; i++) {
        output += '"' + votes.data[i]['topic'] + '",' +
            votes.data[i]['type'] + ',' +
            votes.data[i]['yes'] + ',' +
            votes.data[i]['no'] + ',' +
            votes.data[i]['abstain'] + ',' +
            votes.data[i]['missed'] + '\n';
    }

    output += '</pre>';
    output += "<hr>\n"

    output += "<h3>Copy below text to _data/meetings/" + current_year + "/" +
        zeroFill(current_month,2) + "/ballot.csv</h3>\n<hr>\n";

    output += '<pre>';

    output += 'org';
    for (var i = 0; i < votes.data.length; i++) {
        output += ',"' + votes.data[i]['topic'] + '"';
    }
    output += '\n';

    for (org in orgs) {
    }

    for (org in orgs) {
        if (orgs[org]['registered'] >= 2 && orgs[org]['attend'] >= 2 && orgs[org]['present']) {
            output += "\"" + org + "\"";
            for (var i = 0; i < votes.data.length; i++) {
                output += ',' + document.querySelector('[org="'+org+'"][vote_num="'+i+'"]').getAttribute('vote-type');
            }
            output += '\n'
        }
    }

    output += '</pre>';

    $('#output').html(output);
}

function calculateVotes() {
    for (var i = 0; i < targets.length; i++) {
        var children = targets[i].getElementsByTagName("li");

        votes.data[targets[i].getAttribute('vote_num')][targets[i].getAttribute('vote-type')] = children.length;

        for (j = 0; j < children.length; j++) {
            children[j].setAttribute('vote-type', targets[i].getAttribute('vote-type'));
        }

        document.querySelector('[type="results"][vote-type="' + targets[i].getAttribute('vote-type') +
                               '"][vote_num="' + targets[i].getAttribute('vote_num')+'"]').innerHTML =
            targets[i].getAttribute('vote-type').toUpperCase() + ": " + children.length;
    }

    for (var i = 0; i < votes.data.length; i++) {
        if (votes.data[i]['yes'] + votes.data[i]['no'] < ((3 * imove_orgs) / 4)) {
            document.querySelector('[type="results"][vote-type="abstain"][vote_num="'+i+'"]').setAttribute('win', 'yes');
            document.querySelector('[type="results"][vote-type="yes"][vote_num="'+i+'"]').setAttribute('win', 'no');
            document.querySelector('[type="results"][vote-type="no"][vote_num="'+i+'"]').setAttribute('win', 'no');
        } else if (votes.data[i]['type'] == "no-no" && votes.data[i]['no'] > 0) {
            document.querySelector('[type="results"][vote-type="no"][vote_num="'+i+'"]').setAttribute('win', 'yes');
            document.querySelector('[type="results"][vote-type="yes"][vote_num="'+i+'"]').setAttribute('win', 'no');
            document.querySelector('[type="results"][vote-type="abstain"][vote_num="'+i+'"]').setAttribute('win', 'no');
        } else if (votes.data[i]['type'] != "no-no" && votes.data[i]['yes'] <= (3 * (votes.data[i]['yes'] + votes.data[i]['no'])) / 4) {
            document.querySelector('[type="results"][vote-type="no"][vote_num="'+i+'"]').setAttribute('win', 'yes');
            document.querySelector('[type="results"][vote-type="yes"][vote_num="'+i+'"]').setAttribute('win', 'no');
            document.querySelector('[type="results"][vote-type="abstain"][vote_num="'+i+'"]').setAttribute('win', 'no');
        } else {
            document.querySelector('[type="results"][vote-type="yes"][vote_num="'+i+'"]').setAttribute('win', 'yes');
            document.querySelector('[type="results"][vote-type="no"][vote_num="'+i+'"]').setAttribute('win', 'no');
            document.querySelector('[type="results"][vote-type="abstain"][vote_num="'+i+'"]').setAttribute('win', 'no');
        }
    }

    finishVote();
}

function buildVoteTable() {
    var html = "";
    imove_orgs = 0;
    ooe_orgs = 0;
    var voting_orgs = [];

    meetings_calculated++;

    if (votes.data.length)
        html += '<table>\n';
    for (var i = 0; i < votes.data.length || (i == 0 && votes.data.length == 0); i++) {
        if (votes.data.length != 0) {
            html += '<tr>\n';
            html += '<th topic="true" colspan="3">\n';
            html += votes.data[i]['topic'] + '<br>';
            html += 'Type: ' + votes.data[i]['type'];
            html += '</th>\n';
            html += '</tr>\n';

            html += '<tr>\n';
            html += '<th type="results" vote-type="yes" vote_num='+ i +' win="no">YES</div></td>\n';
            html += '<th type="results" vote-type="abstain" vote_num='+ i +' win="no">ABSTAIN</div>\n';
            html += '<th type="results" vote-type="no" vote_num='+ i +' win="no">NO</div>\n';
            html += '</tr>\n';

            html += '<tr>\n';
            html += '<td><ol data-draggable="target" vote-type="yes" vote_num="' + i + '">\n';
        }
        var shuffled_orgs = shuffle(Object.keys(orgs));
        for (key in shuffled_orgs) {
            var org = shuffled_orgs[key];
            if (orgs[org]['registered'] >= 2 && orgs[org]['attend'] >= 2) {
                if (i == 0) ooe_orgs++;
                if (orgs[org]['present']) {
                    if (i == 0) imove_orgs++;
                    if (votes.data.length)
                        html += '<li data-draggable="item" org="' + org + '" vote_num="' + i + '" vote-type="yes">' + org + '</li>\n';
                    voting_orgs.push(org);
                } else {
                    non_voting_orgs[org] = {reason: 'Not present at current meeting'};
                }
            } else {
                if (!orgs[org]['present']) {
                    non_voting_orgs[org] = {reason: 'Not present at current meeting'};
                } else if (orgs[org]['registered'] < 2) {
                    non_voting_orgs[org] = {reason: 'Registered for ' + orgs[org]['registered'] + ' of 3 previous meetings.'};
                } else {
                    non_voting_orgs[org] = {reason: 'Attended ' + orgs[org]['attend'] + ' of 3 previous meetings'};
                }
            }
        }
        if (votes.data.length) {
            html += '</ol></td>\n';
            html += '<td><ol data-draggable="target" vote-type="abstain" vote_num="' + i + '"></ol></td>\n';
            html += '<td><ol data-draggable="target" vote-type="no" vote_num="' + i + '"></ol></td>\n';
            html += '</tr>\n';
        }
    }
    if (votes.data.length)
        html += '</table>\n';

    if ((meetings_calculated == 3) && (imove_orgs <= ((2 * ooe_orgs) / 3))) {
        $('#header').html('<h1>Meeting Quorum Not Met</h1><br>\n' + '<h3>' +
                          imove_orgs + ' of ' + Math.ceil((2 * ooe_orgs) / 3) + ' orgs needed</h3><br>\n');
        $('#votes').html("");
        $('#results').html("");
    } else {
        $('#header').html('<h3>Meeting Quorum Met</h3>\n');
        if (votes.data.length) {
            $('#header').html($('#header').html() + '<h3>' + Math.ceil((3 * imove_orgs) / 4) + ' of ' +
                              imove_orgs + ' votes needed to meet ballot quorum</h3>');
        } else {
            $('#header').html($('#header').html() + '<h2>No Votes Scheduled</h2>\n');
        }
        $('#votes').html(html);
    }

    var output = '<b>OOE ORGS (Registered/Present at 2 of 3 previous meetings):</b> ' + ooe_orgs + '<br>\n';
    output += '<b>IMOVE ORGS: (Registered/Present at 2 of 3 previous meetings including this one)</b> ' + imove_orgs + ' (needed ' + Math.ceil((2 * ooe_orgs) / 3) + ')<br>\n';
    output += "<h3>Non Voting Orgs</h3>";
    for (org in non_voting_orgs) {
        output += '<b>' + org + ':</b> ' + non_voting_orgs[org]['reason'] + '<br>\n';
    }
    $('#non_voting').html(output);
    output = "<h3>Voting Orgs</h3>\n";
    sorted_orgs = uniq(voting_orgs);
    for (var i = 0; i < sorted_orgs.length; i++) {
        if (i == 0) {
            output += sorted_orgs[i];
        } else {
            output += ', ' + sorted_orgs[i];
        }
    }
    output += '<br>\n';
    $('#voting_orgs').html(output);

    html = '<tr>\n';
    html += '<th class="orgs"></th>\n';
    for (var i = 0; i < votes.data.length; i++) {
        html += '<th style="min-width: 240px;">';
        html += votes.data[i]['topic'] + '<br><br>\n';
        html += 'Type: ' + votes.data[i]['type'];
        html += '</th>\n';
    }
    html += '</tr>\n';
    html += '<tr>\n';
    html += '<th class="orgs">Results</th>\n';
    for (var i = 0; i < votes.data.length; i++) {
        html += '<td id="vote ' + i + '"><br></td>\n';
    }
    html += '</tr>\n';

    $('#results_table').html(html);

    //get the collection of draggable items and add their draggable attributes
    for(items = document.querySelectorAll('[data-draggable="item"]'),
        len = items.length,
        i = 0; i < len; i ++)
    {
        items[i].setAttribute('draggable', 'true');
        items[i].setAttribute('aria-grabbed', 'false');
        items[i].setAttribute('tabindex', '0');
    }

    //get the collection of draggable targets and add their draggable attribute
    for(targets = document.querySelectorAll('[data-draggable="target"]'),
        len = targets.length,
        i = 0; i < len; i ++)
    {
        targets[i].setAttribute('aria-dropeffect', 'none');
    }
}

function buildImoveMatrix(attendance, current) {
	var meeting = [];

	for (var i = 0; i < attendance.data.length; i++) {
		alias = findAlias(attendance.data[i].org);
		if (!meeting.includes(alias)) {
			if (alias in orgs) {
				orgs[alias]['registered']++;
				orgs[alias]['attend']++;
			} else {
				orgs[alias] = {'registered':1, 'attend':parseInt(attendance.data[i]['attend'])};
			}
			if (current) {
				orgs[alias]['present'] = parseInt(attendance.data[i]['attend']);
			}
			meeting.push(alias);
		}
	}

	if (current) registered_orgs = meeting.length;

	filename = 'https://raw.githubusercontent.com/mpi-forum/mpi-forum.github.io/master/_data/meetings/'
		+current_year+'/'+zeroFill(current_month,2)+'/votes.csv'

	Papa.parse(filename, {
		download: true,
		header: true,
		skipEmptyLines: true,
		complete: function(results) {
			votes = results;
			buildVoteTable();
		},
		error: function(error, file) {
			console.error(error);
		}
	});
}

function handleVoteGeneration() {
	document.getElementById("title").innerHTML =
		month_names[parseInt(current_month-1)] + " " + current_year + " Voting";

	filename = 'https://raw.githubusercontent.com/mpi-forum/mpi-forum.github.io/master/_data/meetings/'
		+current_year+'/'+zeroFill(current_month,2)+'/attendance.csv'

	Papa.parse(filename, {
		download: true,
		header: true,
		skipEmptyLines: true,
		complete: function(results) {
			buildImoveMatrix(results, 1);
		},
		error: function(error, file) {
			console.error(error);
		}
	});

	prev_month = current_month;
	prev_year = current_year;

	var request = new XMLHttpRequest();
	do {
		prev_month--;
		if (prev_month == 0) {
			prev_month = 12;
			prev_year--;
		}
		filename = 'https://raw.githubusercontent.com/mpi-forum/mpi-forum.github.io/master/_data/meetings/'
			+prev_year+'/'+zeroFill(prev_month,2)+'/attendance.csv'
		request.open('GET', filename, false);
		request.send();
	} while (request.status == 404);

	Papa.parse(filename, {
		download: true,
		header: true,
		skipEmptyLines: true,
		complete: function(results) {
			buildImoveMatrix(results, 0);
		},
		error: function(error, file) {
			console.error(error);
		}
	});

	do {
		prev_month--;
		if (prev_month == 0) {
			prev_month = 12;
			prev_year--;
		}
		filename = 'https://raw.githubusercontent.com/mpi-forum/mpi-forum.github.io/master/_data/meetings/'
			+prev_year+'/'+zeroFill(prev_month,2)+'/attendance.csv'
		request.open('GET', filename, false);
		request.send();
	} while (request.status == 404);

	Papa.parse(filename, {
		download: true,
		header: true,
		skipEmptyLines: true,
		complete: function(results) {
			buildImoveMatrix(results, 0);
		},
		error: function(error, file) {
			console.error(error);
		}
	});
}

(function()
{
	handleVoteGeneration();

	//exclude older browsers by the features we need them to support
	//and legacy opera explicitly so we don't waste time on a dead browser
	if
	(
		!document.querySelectorAll
		||
		!('draggable' in document.createElement('span'))
		||
		window.opera
	)
	{ return; }

	//dictionary for storing the selections data
	//comprising an array of the currently selected items
	//a reference to the selected items' owning container
	//and a refernce to the current drop target container
	var selections =
	{
		items      : [],
		owner      : null,
		droptarget : null
	};

	//function for selecting an item
	function addSelection(item)
	{
		//if the owner reference is still null, set it to this item's parent
		//so that further selection is only allowed within the same container
		if(!selections.owner)
		{
			selections.owner = item.parentNode;
		}
		
		//or if that's already happened then compare it with this item's parent
		//and if they're not the same container, return to prevent selection
		else if(selections.owner != item.parentNode)
		{
			return;
		}
				
		//set this item's grabbed state
		item.setAttribute('aria-grabbed', 'true');
		
		//add it to the items array
		selections.items.push(item);
	}
	
	//function for unselecting an item
	function removeSelection(item)
	{
		//reset this item's grabbed state
		item.setAttribute('aria-grabbed', 'false');
		
		//then find and remove this item from the existing items array
		for(var len = selections.items.length, i = 0; i < len; i ++)
		{
			if(selections.items[i] == item)
			{
				selections.items.splice(i, 1);
				break;
			}
		}
	}
	
	//function for resetting all selections
	function clearSelections()
	{
		//if we have any selected items
		if(selections.items.length)
		{
			//reset the owner reference
			selections.owner = null;

			//reset the grabbed state on every selected item
			for(var len = selections.items.length, i = 0; i < len; i ++)
			{
				selections.items[i].setAttribute('aria-grabbed', 'false');
			}

			//then reset the items array
			selections.items = [];
		}
	}

	//shorctut function for testing whether a selection modifier is pressed
	function hasModifier(e)
	{
		return (e.ctrlKey || e.metaKey || e.shiftKey);
	}
	
	 
	//function for applying dropeffect to the target containers
	function addDropeffects()
	{
		//apply aria-dropeffect and tabindex to all targets apart from the owner
		for(var len = targets.length, i = 0; i < len; i ++)
		{
			if
			(
				targets[i] != selections.owner
				&&
				targets[i].getAttribute('aria-dropeffect') == 'none'
			)
			{
				targets[i].setAttribute('aria-dropeffect', 'move');
				targets[i].setAttribute('tabindex', '0');
			}
		}

		//remove aria-grabbed and tabindex from all items inside those containers
		for(var len = items.length, i = 0; i < len; i ++)
		{
			if
			(
				items[i].parentNode != selections.owner
				&&
				items[i].getAttribute('aria-grabbed')
			)
			{
				items[i].removeAttribute('aria-grabbed');
				items[i].removeAttribute('tabindex');
			}
		}
	}
	
	//function for removing dropeffect from the target containers
	function clearDropeffects()
	{
		//if we have any selected items
		if(selections.items.length)
		{
			//reset aria-dropeffect and remove tabindex from all targets
			for(var len = targets.length, i = 0; i < len; i ++)
			{
				if(targets[i].getAttribute('aria-dropeffect') != 'none')
				{
					targets[i].setAttribute('aria-dropeffect', 'none');
					targets[i].removeAttribute('tabindex');
				}
			}

			//restore aria-grabbed and tabindex to all selectable items
			//without changing the grabbed value of any existing selected items
			for(var len = items.length, i = 0; i < len; i ++)
			{
				if(!items[i].getAttribute('aria-grabbed'))
				{
					items[i].setAttribute('aria-grabbed', 'false');
					items[i].setAttribute('tabindex', '0');
				}
				else if(items[i].getAttribute('aria-grabbed') == 'true')
				{
					items[i].setAttribute('tabindex', '0');
				}
			}
		}
	}

	//shortcut function for identifying an event element's target container
	function getContainer(element)
	{
		do
		{
			if(element.nodeType == 1 && element.getAttribute('aria-dropeffect'))
			{
				return element;
			}
		}
		while(element = element.parentNode);
		
		return null;
	}



	//mousedown event to implement single selection
	document.addEventListener('mousedown', function(e)
	{
		//if the element is a draggable item
		if(e.target.getAttribute('draggable'))
		{
			//clear dropeffect from the target containers
			clearDropeffects();

			//if the multiple selection modifier is not pressed
			//and the item's grabbed state is currently false
			if
			(
				!hasModifier(e)
				&&
				e.target.getAttribute('aria-grabbed') == 'false'
			)
			{
				//clear all existing selections
				clearSelections();
			
				//then add this new selection
				addSelection(e.target);
			}
		}
		
		//else [if the element is anything else]
		//and the selection modifier is not pressed
		else if(!hasModifier(e))
		{
			//clear dropeffect from the target containers
			clearDropeffects();

			//clear all existing selections
			clearSelections();
		}
		
		//else [if the element is anything else and the modifier is pressed]
		else
		{
			//clear dropeffect from the target containers
			clearDropeffects();
		}

	}, false);
	
	//mouseup event to implement multiple selection
	document.addEventListener('mouseup', function(e)
	{
		//if the element is a draggable item
		//and the multipler selection modifier is pressed
		if(e.target.getAttribute('draggable') && hasModifier(e))
		{
			//if the item's grabbed state is currently true
			if(e.target.getAttribute('aria-grabbed') == 'true')
			{
				//unselect this item
				removeSelection(e.target);
				
				//if that was the only selected item
				//then reset the owner container reference
				if(!selections.items.length)
				{
					selections.owner = null;
				}
			}
			
			//else [if the item's grabbed state is false]
			else
			{
				//add this additional selection
				addSelection(e.target);
			}
		}
		
	}, false);

	//dragstart event to initiate mouse dragging
	document.addEventListener('dragstart', function(e)
	{
		//if the element's parent is not the owner, then block this event
		if(selections.owner != e.target.parentNode)
		{
			e.preventDefault();
			return;
		}
				
		//[else] if the multiple selection modifier is pressed
		//and the item's grabbed state is currently false
		if
		(
			hasModifier(e)
			&&
			e.target.getAttribute('aria-grabbed') == 'false'
		)
		{
			//add this additional selection
			addSelection(e.target);
		}
		
		//we don't need the transfer data, but we have to define something
		//otherwise the drop action won't work at all in firefox
		//most browsers support the proper mime-type syntax, eg. "text/plain"
		//but we have to use this incorrect syntax for the benefit of IE10+
		e.dataTransfer.setData('text', '');
		
		//apply dropeffect to the target containers
		addDropeffects();
	
	}, false);
	
	

	//keydown event to implement selection and abort
	document.addEventListener('keydown', function(e)
	{
		//if the element is a grabbable item
		if(e.target.getAttribute('aria-grabbed'))
		{
			//Space is the selection or unselection keystroke
			if(e.keyCode == 32)
			{
				//if the multiple selection modifier is pressed
				if(hasModifier(e))
				{
					//if the item's grabbed state is currently true
					if(e.target.getAttribute('aria-grabbed') == 'true')
					{
						//if this is the only selected item, clear dropeffect
						//from the target containers, which we must do first
						//in case subsequent unselection sets owner to null
						if(selections.items.length == 1)
						{
							clearDropeffects();
						}

						//unselect this item
						removeSelection(e.target);

						//if we have any selections
						//apply dropeffect to the target containers,
						//in case earlier selections were made by mouse
						if(selections.items.length)
						{
							addDropeffects();
						}
				
						//if that was the only selected item
						//then reset the owner container reference
						if(!selections.items.length)
						{
							selections.owner = null;
						}
					}
					
					//else [if its grabbed state is currently false]
					else
					{
						//add this additional selection
						addSelection(e.target);

						//apply dropeffect to the target containers
						addDropeffects();
					}
				}

				//else [if the multiple selection modifier is not pressed]
				//and the item's grabbed state is currently false
				else if(e.target.getAttribute('aria-grabbed') == 'false')
				{
					//clear dropeffect from the target containers
					clearDropeffects();

					//clear all existing selections
					clearSelections();
			
					//add this new selection
					addSelection(e.target);

					//apply dropeffect to the target containers
					addDropeffects();
				}
				
				//else [if modifier is not pressed and grabbed is already true]
				else
				{
					//apply dropeffect to the target containers
					addDropeffects();
				}
			
				//then prevent default to avoid any conflict with native actions
				e.preventDefault();
			}

			//Modifier + M is the end-of-selection keystroke
			if(e.keyCode == 77 && hasModifier(e))
			{
				//if we have any selected items
				if(selections.items.length)
				{
					//apply dropeffect to the target containers
					//in case earlier selections were made by mouse
					addDropeffects();

					//if the owner container is the last one, focus the first one
					if(selections.owner == targets[targets.length - 1])
					{
						targets[0].focus();
					}
					
					//else [if it's not the last one], find and focus the next one
					else
					{
						for(var len = targets.length, i = 0; i < len; i ++)
						{
							if(selections.owner == targets[i])
							{
								targets[i + 1].focus();
								break;
							}
						}
					}
				}
		
				//then prevent default to avoid any conflict with native actions
				e.preventDefault();
			}
		}
		
		//Escape is the abort keystroke (for any target element)
		if(e.keyCode == 27)
		{
			//if we have any selected items
			if(selections.items.length)
			{
				//clear dropeffect from the target containers
				clearDropeffects();
				
				//then set focus back on the last item that was selected, which is
				//necessary because we've removed tabindex from the current focus
				selections.items[selections.items.length - 1].focus();

				//clear all existing selections
				clearSelections();
				
				//but don't prevent default so that native actions can still occur
			}
		}
			
	}, false);


   
	//related variable is needed to maintain a reference to the
	//dragleave's relatedTarget, since it doesn't have e.relatedTarget
	var related = null;

	//dragenter event to set that variable
	document.addEventListener('dragenter', function(e)
	{
		related = e.target;

	}, false);
	
	//dragleave event to maintain target highlighting using that variable
	document.addEventListener('dragleave', function(e)
	{
		//get a drop target reference from the relatedTarget
		var droptarget = getContainer(related);
		
		//if the target is the owner then it's not a valid drop target
		if(droptarget == selections.owner)
		{
			droptarget = null;
		}

		//if the drop target is different from the last stored reference
		//(or we have one of those references but not the other one)
		if(droptarget != selections.droptarget)
		{
			//if we have a saved reference, clear its existing dragover class
			if(selections.droptarget)
			{
				selections.droptarget.className =
					selections.droptarget.className.replace(/ dragover/g, '');
			}
			
			//apply the dragover class to the new drop target reference
			if(droptarget)
			{
				droptarget.className += ' dragover';
			}
					
			//then save that reference for next time
			selections.droptarget = droptarget;
		}

	}, false);

	//dragover event to allow the drag by preventing its default
	document.addEventListener('dragover', function(e)
	{
		//if we have any selected items, allow them to be dragged
		if(selections.items.length)
		{
			e.preventDefault();
		}
	
	}, false);



	//dragend event to implement items being validly dropped into targets,
	//or invalidly dropped elsewhere, and to clean-up the interface either way
	document.addEventListener('dragend', function(e)
	{
		//if we have a valid drop target reference
		//(which implies that we have some selected items)
		if(selections.droptarget)
		{
			//append the selected items to the end of the target container
			for(var len = selections.items.length, i = 0; i < len; i ++)
			{
				selections.droptarget.appendChild(selections.items[i]);
			}

			//prevent default to allow the action
			e.preventDefault();
		}

		//if we have any selected items
		if(selections.items.length)
		{
			//clear dropeffect from the target containers
			clearDropeffects();
		
			//if we have a valid drop target reference
			if(selections.droptarget)
			{
				//reset the selections array
				clearSelections();

				//reset the target's dragover class
				selections.droptarget.className =
					selections.droptarget.className.replace(/ dragover/g, '');

				//reset the target reference
				selections.droptarget = null;
			}
		}

		calculateVotes();

	}, false);

})();
