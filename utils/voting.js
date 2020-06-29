var aliases = {
    'ARM': [],
    'ATOS': ['BULL','ATOS'],
    'Argonne': ['ANL', 'ARGONNE NATIONAL LABORATORY', 'ARGONNE NATIONAL LAB'],
    'Auburn': ['AUBURN U', 'AUBURN UNIVERSITY'],
    'BSC': ['BARCELONA SUPERCOMPUTING CENTER'],
    'Basel': ['UNIVERSITY OF BASEL'],
    'Berkeley': ['LBL', 'LAWRENCE BERKELEY NATIONAL LABORATORY', 'LAWRENCE BERKELEY LAB', 'LBNL', 'LAWRENCE BERKELEY NATIONAL LAB', 'BERKELEY LAB'],
    'CEA': [],
    'Cisco': ['CISCO SYSTEMS INC.', 'CISCO SYSTEMS, INC.', 'CISCO SYSTEMS'],
    'ETH Zurich': ['ETH', 'ETH ZURICH','ETH ZÜRICH'],
    'Edinburgh': ['EPCC', 'EPCC, THE UNIVERSITY OF EDINBURGH', 'UNIVERISTY OF EDINBURGH'],
    'Forschungszentrum Julich': ['FORSCHUNGSZENTRUM JÜLICH','FORSCHUNGSZENTRUM JÜLICH GMBH'],
    'Fujitsu': [],
    'HDF': ['HDF GROUP'],
    'HLRS': ["UNIVERSITY OF STUTTGART, HLRS", "HLRS, UNIVERSITY OF STUTTGART", "STUTTGART UNIVERSITY", "HLRS, USTUTT", "HIGH PERFORMANCE COMPUTING CENTER STUTTGART (HLRS)"],
    'HPE': ['Hewlett Packard Enterprise', 'CRAY INC', 'CRAY, A HEWLETT PACKARD ENTERPRISE COMPANY', 'CRAY'],
    'IBM': [],
    'INRIA': ['BORDEAUX INP/INRIA', "BORDEAUX INP", "BORDEAUX-INP", "INRIA BORDEAUX SUD OUEST"],
    'Intel': ['INTEL CORPORATION', 'INTEL CORP','INTEL CORP.'],
    'KTH': ['KTH ROYAL INSTITUTE OF TECHNOLOGY'],
    'Kyushu': ['KYUSHU UNIVERSITY', 'KYUSHU U.', 'U. KYUSHU'],
    'Lenovo': [],
    'Livermore': ['LLNL', 'LAWRENCE LIVERMORE NATIONAL LABORATORY', 'LAWRENCE LIVERMORE NATIONAL LAB', 'LAWRENCE LIVERMORE NATL.  LAB.','LAWRENCE LIVERMORE NATIONAL LAB.'],
    'Los Alamos': ['LANL', 'LOS ALAMOS NATIONAL LABORATORY', 'LOS ALAMOS NATIONAL LAB'],
    'LRZ': ['LEIBNIZ SUPERCOMPUTING CENTRE (LRZ)'],
    'Microsoft': ['MICROSOFT INC.'],
    'NEC': ['NEC CORPORATION', 'NEC DEUTSCHLAND GMBH', 'NEC DEUTSCHLAND GAMBH'],
    'NVIDIA': ['NVIDIA USA', 'MELLANOX', 'MELLANOX TECHNOLOGIES', 'MELLANOX TECHNOLOGIES INC', 'MELLANOX TECHNOLOGIES, INC.'],
    'OSU': ['THE OHIO STATE U.', 'THE OHIO STATE UNIVERSITY', 'OHIO STATE UNIVERSITY'],
    'Oak Ridge': ['ORNL', 'OAK RIDGE NATIONAL LABORATORY', 'OAK RIDGE NATIONAL LAB', 'OAK RIDGE NATIONAL LABS'],
    'PAR-TEC': [],
    'PNNL': ['PACIFIC NORTHWEST NATIONAL LABORATORY'],
    'Paratools': ['PARATOOLS SAS', 'PARATOOLS, INC.'],
    'RIKEN': ['RIKEN AICS'],
    'RWTH': ['RWTH AACHEN UNIVERSITY'],
    'Radcliffe': [],
    'Sandia': ['SNL', 'SANDIA NATIONAL LABORATORY', 'SANDIA NATIONAL LAB', 'SANDIA NATIONAL LABORATORIES', 'SANDIA'],
    'TACC': ['THE TEXAS ADVANCED COMPUTING CENTER'],
    'TU Munich': ['TUM', 'TU MUNICH', 'TU-MUNICH', 'TECHNICAL UNIVERSITY OF MUNICH'],
    'TU Wien': ['VSC RESEARCH CENTER, TU WIEN'],
    'Tennessee Tech': ['TENNESSEE TECH UNIVERSITY','TENNESSEE TECHNOLOGICAL UNIVERSITY'],
    'U Innsbruck': ['UNIVERSITY OF INNSBRUCK'],
    'U Oregon': ['UNIVERSITY OF OREGON'],
    'UAB': ['U ALABAMA BIRMINGHAM','UNIVERSITY OF ALABAMA AT BIRMINGHAM'],
    'UIUC': ['UNIVERSITY OF ILLINOIS URBANA-CHAMPAIGN', 'UNIVERSITY OF ILLINOIS', 'NCSA/UIUC', 'NCSA', 'UNIVERSITY OF ILLINOIS AT URBANA-CHAMPAIGN', 'UNIVERSITY OF ILLINOIS AT URBANA-CHAMPAIGN/NCSA'],
    'UNM': ['UNIVERSITY OF NEW MEXICO'],
    'UTC': ['UNIVERSITY OF TENNESSEE, CHATTANOOGA', 'UNIVERSITY OF TENNESSEE CHATTANOOGA', 'UNIVERSITY OF TENNESSEE AT CHATTANOOGA'],
    'UTEP': ['THE UNIVERSITY OF TEXAS AT EL PASO'],
    'UTK': ['UNIVERSITY OF TENNESSEE, KNOXVILLE', 'UNIVERSITY OF TENNESSEE', 'THE UNIVERSITY OF TENNESSEE', 'U TENNESSEE', 'THE UNIVERSITY OF TENNESSEE, KNOXVILLE'],
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

current_month = 06;
current_year = 2020;
var orgs = {};
var votes = {};
var prev_ballot = {};
var registered_orgs;
var ooe_orgs;
var prev_ooe_orgs = -1;
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
        if (votes.data[i]['topic'] == "daybreak") {
            continue;
        }
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
        topic = votes.data[i]['topic'];
        type = votes.data[i]['type'];
        if (topic == "daybreak") {
            continue;
        }
        tmp_topic = "" + topic + " (" + type + ")"

        output += ',"' + tmp_topic + '"';
    }
    output += '\n';

    for (org in orgs) {
    }

    for (org in orgs) {
        if (orgs[org]['registered'] >= 2 && orgs[org]['attend'] >= 2 && orgs[org]['present']) {
            output += "\"" + org + "\"";
            for (var i = 0; i < votes.data.length; i++) {
                if (votes.data[i]['topic'] != "daybreak") {
                    output += ',' + document.querySelector('[org="'+org+'"][vote_num="'+i+'"]').getAttribute('vote-type');
                }
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
        if (votes.data[i]['topic'] != "daybreak") {
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
    }

    finishVote();
}

function findPrevVote(org, topic) {
    for (var i = 0; i < prev_ballot.data.length; i++) {
        if (prev_ballot.data[i]['org'] == org) {
            return prev_ballot.data[i][topic];
        }
    }
}

function buildVoteTable() {
    var html = "";
    var printable_html = "";
    imove_orgs = 0;
    ooe_orgs = 0;
    var voting_orgs = [];

    meetings_calculated++;

    if (meetings_calculated == 3 && prev_ooe_orgs != -1) {
        if (votes.data.length) {
            html += '<table>\n';
            printable_html += '<table border="1">\n';
            printable_html += '<tr>\n';
            printable_html += '<th> </th>\n';
        }
        for (var i = 0; i < votes.data.length || (i == 0 && votes.data.length == 0); i++) {
            var topic_num = "";
            var topic = "";
            var type = "";

            if (votes.data.length > 0) {
                topic_num = votes.data[i]['topic'].split(":")[0];
                topic = votes.data[i]['topic'];
                type = votes.data[i]['type'];

                if (topic == "daybreak") {
                    html += '<tr><th> </th><th></th><th> </th></tr>\n';
                    html += '<tr><th> </th><th bgcolor="#FF8200">Begin New Voting Day</th><th> </th></tr>\n';
                    html += '<tr><th> </th><th></th><th> </th></tr>\n';
                    continue;
                }

                html += '<tr>\n';
                html += '<th topic="true" colspan="3">\n';
                html += votes.data[i]['topic'] + '<br>';
                html += 'Type: ' + votes.data[i]['type'];
                html += '</th>\n';
                html += '</tr>\n';
            }

            html += '<tr>\n';
            html += '<th type="results" vote-type="yes" vote_num='+ i +' win="no">YES</div></td>\n';
            html += '<th type="results" vote-type="abstain" vote_num='+ i +' win="no">ABSTAIN</div>\n';
            html += '<th type="results" vote-type="no" vote_num='+ i +' win="no">NO</div>\n';
            html += '</tr>\n';

            html += '<tr>\n';
            html += '<td><ol data-draggable="target" vote-type="yes" vote_num="' + i + '">\n';

            printable_html += '<th class="rotate"><div>' + topic_num + ' (' + type + ')</div></th>';

            //var shuffled_orgs = shuffle(Object.keys(orgs));
            // Not shuffling the orgs since voting is all online now. Alphabetizing makes it easier
            // to copy.
            var shuffled_orgs = Object.keys(orgs).sort((a, b) => a.localeCompare(b));
            var abstain_html = "";
            var no_html = "";
            for (key in shuffled_orgs) {
                var org = shuffled_orgs[key];
                if (orgs[org]['registered'] >= 2 && orgs[org]['attend'] >= 2) {
                    var tmp_topic = "";
                    if (i == 0) ooe_orgs++;
                    if (orgs[org]['present']) {
                        if (i == 0) imove_orgs++;
                        if (votes.data.length)
                            tmp_topic = topic + " (" + type + ")"
                        org_vote = findPrevVote(org,tmp_topic);
                        if (org_vote == "abstain") {
                            abstain_html += '<li data-draggable="item" org="' + org + '" vote_num="' + i + '" vote-type="abstain">' + org + '</li>\n';
                        } else if (org_vote == "no") {
                            no_html += '<li data-draggable="item" org="' + org + '" vote_num="' + i + '" vote-type="no">' + org + '</li>\n';
                        } else {
                            html += '<li data-draggable="item" org="' + org + '" vote_num="' + i + '" vote-type="yes">' + org + '</li>\n';
                        }
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
                html += '<td><ol data-draggable="target" vote-type="abstain" vote_num="' + i + '">\n';
                html += abstain_html;
                html += '\n</ol></td>\n';
                html += '<td><ol data-draggable="target" vote-type="no" vote_num="' + i + '">\n';
                html += no_html;
                html += '\n</ol></td>\n';
                html += '</tr>\n';
            }
        }
        printable_html += '</tr>\n';
        if (votes.data.length)
            html += '</table>\n';

        sorted_orgs = uniq(voting_orgs);

        if (imove_orgs <= ((2 * prev_ooe_orgs) / 3)) {
            $('#header').html('<h1>Meeting Quorum Not Met</h1><br>\n' + '<h3>' +
                              imove_orgs + ' of ' + Math.ceil((2 * prev_ooe_orgs) / 3) + ' orgs needed</h3><br>\n');
            $('#votes').html("");
            $('#printable_votes').html("");
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

            for (var i = 0; i < sorted_orgs.length; i++) {
                printable_html += '<tr>\n';
                printable_html += '<th>' + sorted_orgs[i] + '</th>\n';
                for (var j = 0; j < votes.data.length; j++) {
                    if (votes.data[j]['topic'] != "daybreak") {
                        printable_html += '<td>    </td>\n';
                    }
                }
                printable_html += '</tr>\n';
            }
            printable_html += '</table>\n';
            printable_html += '<P style="page-break-before: always">\n';

            $('#printable_votes').html(printable_html);
        }

        var output = '<b>OOE ORGS (Registered/Present at 2 of 3 previous meetings):</b> ' + ooe_orgs + '<br>\n';
        output += '<b>IMOVE ORGS: (Registered/Present at 2 of 3 previous meetings including this one)</b> ' + imove_orgs + ' (needed ' + Math.ceil((2 * prev_ooe_orgs) / 3) + ')<br>\n';
        output += "<h3>Non Voting Orgs</h3>";
        for (org in non_voting_orgs) {
            output += '<b>' + org + ':</b> ' + non_voting_orgs[org]['reason'] + '<br>\n';
        }
        $('#non_voting').html(output);
        output = "<h3>Voting Orgs</h3>\n";
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
}

function buildImoveMatrix(attendance, current) {
    var meeting = {};

    for (var i = 0; i < attendance.data.length; i++) {
        alias = findAlias(attendance.data[i].org);
        if (!(alias in meeting)) {
            /* If this is the first time the org appears in this meeting */
            if (alias in orgs) {
                /* The org has attendend previous meetings */
                orgs[alias]['registered']++;
                orgs[alias]['attend'] += parseInt(attendance.data[i]['attend']);
            } else {
                /* If this is the first time the org appears at all */
                orgs[alias] = {'registered':1, 'attend':parseInt(attendance.data[i]['attend'])};
            }

            /* If this is the current meeting, check if they're actually present too. */
            if (current) {
                orgs[alias]['present'] = parseInt(attendance.data[i]['attend']);
            }

            if (parseInt(attendance.data[i]['attend'])) {
                meeting[alias] = {'registered':1, 'attend':parseInt(attendance.data[i]['attend'])};
            }
        } else if (meeting[alias]['attend'] == 0 && attendance.data[i]['attend']) {
            /* The org appeared in the meeting before. Check if they need to be updated. */
            orgs[alias]['attend']++;
            meeting[alias]['attend']++;

            if (current) {
                orgs[alias]['present'] = 1;
            }
        }
    }

    if (current) registered_orgs = Object.keys(meeting).length;

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
    if (document.getElementById("title") != null)
        document.getElementById("title").innerHTML =
            month_names[parseInt(current_month-1)] + " " + current_year + " Voting";

    filename = 'https://raw.githubusercontent.com/mpi-forum/mpi-forum.github.io/master/_data/meetings/'
        +current_year+'/'+zeroFill(current_month,2)+'/ballot.csv'

    Papa.parse(filename, {
        download: true,
        header: true,
        skipEmptyLines: true,
        complete: function(results) {
            prev_ballot = results;
        },
        error: function(error, file) {
            console.error(error);
        }
    });

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

    /* Read the OOE number from the previous meeting to determine meeting quorum for the current meeting. */
    var md_request = new XMLHttpRequest();
    md_request.open('GET', 'https://raw.githubusercontent.com/mpi-forum/mpi-forum.github.io/master/meetings/'
                    +prev_year+'/'+zeroFill(prev_month,2)+'/votes.md', true);
    md_request.responseType = 'blob';
    md_request.onload = function() {
        var reader = new FileReader();
        reader.readAsText(md_request.response);
        reader.onload = function(e) {
            var regex = /.*^ooe: (\d+)$.*/m;
            var match = regex.exec(e.target.result);
            prev_ooe_orgs = match[1];
            buildVoteTable();
        }
    }
    md_request.send();

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
        document.addEventListener('mousedown',
                                  function(e)
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
        document.addEventListener('mouseup',
                                  function(e)
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
        document.addEventListener('dragstart',
                                  function(e)
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
