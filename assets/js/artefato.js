/* Mapa */
function iniciarMapa(lat, lng) {
    var mapCanvas = document.getElementById("map");
    var myCenter = new google.maps.LatLng(lat, lng);
    var mapOptions = {
        center: myCenter,
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({
        position:myCenter,
        animation:google.maps.Animation.BOUNCE
    });
    marker.setMap(map);

    google.maps.event.addListener(marker,'click',function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
    });
}
/* // Mapa */

/* Three js */
var scene, camera, renderer, controls, container;

var divWidth = $("#artefato").innerWidth(),
	divHeight = $("#artefato").innerHeight();

function init(caminho) {
	camera = new THREE.PerspectiveCamera( 50, divWidth/divHeight, 1, 2500 );
	camera.position.z = 150;

	scene = new THREE.Scene();
	scene.fog = new THREE.Fog( 0xC0C0C0, 2, 2500 );

	container = document.getElementById('artefato');

	// Controles
	controls = new THREE.TrackballControls( camera , container );
	controls.rotateSpeed = 3.5;
	controls.zoomSpeed = 1.2;
	// controls.panSpeed = 3.5;
	// controls.noZoom = false;
	// controls.noPan = false;
	// controls.staticMoving = true;
	controls.keys = [ 65, 83, 68 ];

	var loader = new THREE.STLLoader();

  // Binary files
	var material = new THREE.MeshPhongMaterial( { color: 0xAAAAAA, specular: 0x111111, shininess: 200 } );
	loader.load( caminho, function ( geometry ) {
		var mesh = new THREE.Mesh( geometry, material );
		mesh.castShadow = true;
		mesh.receiveShadow = true;
		scene.add( mesh );
	});

	// Lights
	scene.add( new THREE.HemisphereLight( 0x443333, 0x111122 ) );
	addShadowedLight( 1, 2, 1, 0xffffff, 0.7 );
	addShadowedLight( -1, -2, -1, 0xffffff, 0.7 );

	// renderer
	renderer = new THREE.WebGLRenderer( { antialias: true } );
	renderer.setClearColor( scene.fog.color );
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( divWidth, divHeight );
	renderer.gammaInput = true;
	renderer.gammaOutput = true;
	renderer.shadowMap.enabled = true;
	renderer.shadowMap.renderReverseSided = false;

	container.appendChild( renderer.domElement );

	//
	window.addEventListener( 'resize', onWindowResize, false );

}

function addShadowedLight( x, y, z, color, intensity ) {
	var directionalLight = new THREE.DirectionalLight( color, intensity );
	directionalLight.position.set( x, y, z );
	scene.add( directionalLight );
	directionalLight.castShadow = true;
	var d = 1;
	directionalLight.shadow.camera.left = -d;
	directionalLight.shadow.camera.right = d;
	directionalLight.shadow.camera.top = d;
	directionalLight.shadow.camera.bottom = -d;
	directionalLight.shadow.camera.near = 1;
	directionalLight.shadow.camera.far = 4;
	directionalLight.shadow.mapSize.width = 1024;
	directionalLight.shadow.mapSize.height = 1024;
	directionalLight.shadow.bias = -0.005;
}

function onWindowResize() {
	$(document).ready(function() {
		divWidth = $("#artefato").innerWidth();
		divHeight = 2*$("#artefato").innerWidth()/3;

		camera.aspect = divWidth / divHeight;
		camera.updateProjectionMatrix();
		renderer.setSize( divWidth, divHeight );
	});
}

function animate() {
	requestAnimationFrame(animate);
	render();
	controls.update();
}

function render() {
	renderer.render( scene, camera );
}

function startApp(arquivo, latitude, longitude) {
	$(document).ready(function() {
		init(arquivo);
		animate();
		iniciarMapa(latitude, longitude);
	});
}
/* // Three js */
