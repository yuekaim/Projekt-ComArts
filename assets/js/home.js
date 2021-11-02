// Ported from original Metaball script by SATO Hiroyuki
// http://park12.wakwak.com/~shp/lc/et/en_aics_script.html
// var rect = new Path.Rectangle({
//     point: [0, 0],
//     size: [view.size.width, view.size.height],
// });
// rect.sendToBack();
// rect.fillColor = 'white';

var raster = new Raster('gradient');
raster.position = view.center;
raster.scale(0.3);


project.currentStyle = {
	fillColor: 'black'
};

var x = [100, 250, 400, 650, 750, 900, 1000];
var y = [200, 350, 450, 250, 350, 450, 550];

var ballPositions = [[x[0], y[0]], [x[1], y[1]], [x[2], y[2]],
	[x[3], y[3]], [x[4], y[4]], [x[5], y[5]], [x[6], y[6]]];
var letters = ['C','O','M','A','R','T','S'];

var texts = [];

var handle_len_rate = 2.4;
var circlePaths = [];
var radius = 50;
for (var i = 0, l = ballPositions.length; i < l; i++) {
	var circlePath = new Path.Rectangle({
		center: ballPositions[i],
		size: 200,
		radius: 50,
		blendMode: 'destination-out'
	});
	circlePaths.push(circlePath);

}
//
// var largeCircle = new Path.Circle({
// 	center: [676, 433],
// 	radius: 100,
// 	blendMode: 'destination-out'
// });
// circlePaths.push(largeCircle);


var mx = 1000;
var my = 1000;
var dx, dy;

function onMouseMove(event) {
	if (event.point.x > mx){
		dx = -1;
	} else {
		dx = 1;
	}
	if (event.point.y > my){
		dy = -1;
	} else {
		dy = 1;
	}
	mx = event.point.x;
	my = event.point.y;


	// largeCircle.position = event.point;
	circlePaths[0].position.x += dx;
	texts[0].position.x += dx;
	circlePaths[0].position.y -= dy;
	texts[0].position.y -= dy;

	circlePaths[1].position.x += dx * 1.5;
	texts[1].position.x += dx * 1.5;
	circlePaths[1].position.y -= dy;
	texts[1].position.y -= dy;

	circlePaths[2].position.x += dx;
	texts[2].position.x += dx;
	circlePaths[2].position.y += dy;
	texts[2].position.y += dy;

	circlePaths[3].position.x -= dx * 2.3;
	texts[3].position.x -= dx * 2.3;
	circlePaths[3].position.y += dy * 1.3;
	texts[3].position.y += dy * 1.3;

	circlePaths[4].position.x += dx * 2;
	texts[4].position.x += dx * 2;
	circlePaths[4].position.y -= dy * 2.3;
	texts[4].position.y -= dy * 2.3;

	circlePaths[5].position.x -= dx * 2;
	texts[5].position.x -= dx * 2;
	circlePaths[5].position.y += dy * 2;
	texts[5].position.y += dy * 2;

	circlePaths[6].position.x += dx * 3;
	texts[6].position.x += dx * 3;
	circlePaths[6].position.y += dy * 2;
	texts[6].position.y += dy * 2;

	generateConnections(circlePaths);
}

var connections = new Group();
function generateConnections(paths) {
	// Remove the last connection paths:
	connections.children = [];

	for (var i = 0, l = paths.length; i < l; i++) {
		for (var j = i - 1; j >= 0; j--) {
			var path = metaball(paths[i], paths[j], 0.5, handle_len_rate, 300);
			if (path) {
				connections.appendTop(path);
				path.removeOnMove();
			}
		}
	}
}

generateConnections(circlePaths);

for (var i = 0, l = ballPositions.length; i < l; i++) {
	var text = new PointText({
		position: ballPositions[i],
		content: letters[i]
	});
	// text.content = letters[i];
	text.fillColor = "black";
	text.fontSize = 150;
	text.justification = 'center';
	text.position.y += 40;
	texts.push(text);
}

// ---------------------------------------------
function metaball(ball1, ball2, v, handle_len_rate, maxDistance) {
	var center1 = ball1.position;
	var center2 = ball2.position;
	var radius1 = ball1.bounds.width / 2;
	var radius2 = ball2.bounds.width / 2;
	var pi2 = Math.PI / 2;
	var d = center1.getDistance(center2);
	var u1, u2;

	if (radius1 == 0 || radius2 == 0)
		return;

	if (d > maxDistance || d <= Math.abs(radius1 - radius2)) {
		return;
	} else if (d < radius1 + radius2) { // case circles are overlapping
		u1 = Math.acos((radius1 * radius1 + d * d - radius2 * radius2) /
				(2 * radius1 * d));
		u2 = Math.acos((radius2 * radius2 + d * d - radius1 * radius1) /
				(2 * radius2 * d));
	} else {
		u1 = 0;
		u2 = 0;
	}

	var angle1 = (center2 - center1).getAngleInRadians();
	var angle2 = Math.acos((radius1 - radius2) / d);
	var angle1a = angle1 + u1 + (angle2 - u1) * v;
	var angle1b = angle1 - u1 - (angle2 - u1) * v;
	var angle2a = angle1 + Math.PI - u2 - (Math.PI - u2 - angle2) * v;
	var angle2b = angle1 - Math.PI + u2 + (Math.PI - u2 - angle2) * v;
	var p1a = center1 + getVector(angle1a, radius1);
	var p1b = center1 + getVector(angle1b, radius1);
	var p2a = center2 + getVector(angle2a, radius2);
	var p2b = center2 + getVector(angle2b, radius2);

	// define handle length by the distance between
	// both ends of the curve to draw
	var totalRadius = (radius1 + radius2);
	var d2 = Math.min(v * handle_len_rate, (p1a - p2a).length / totalRadius);

	// case circles are overlapping:
	d2 *= Math.min(1, d * 2 / (radius1 + radius2));

	radius1 *= d2;
	radius2 *= d2;

	var path = new Path({
		segments: [p1a, p2a, p2b, p1b],
		style: ball1.style,
		closed: true,
		blendMode: 'destination-out'
	});
	var segments = path.segments;
	segments[0].handleOut = getVector(angle1a - pi2, radius1);
	segments[1].handleIn = getVector(angle2a + pi2, radius2);
	segments[2].handleOut = getVector(angle2b - pi2, radius2);
	segments[3].handleIn = getVector(angle1b + pi2, radius1);
	return path;
}

// ------------------------------------------------
function getVector(radians, length) {
	return new Point({
		// Convert radians to degrees:
		angle: radians * 180 / Math.PI,
		length: length
	});
}
