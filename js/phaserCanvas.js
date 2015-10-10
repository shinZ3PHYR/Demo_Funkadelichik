
window.addEventListener("load",init);

function init()
{
    var game = new Phaser.Game(2000, 720, Phaser.CANVAS, 'gameContainer', {});
    game.state.add('run', run);
    // game.state.add('victoryScreen',victoryScreen);
    // game.parameters = httpGetData('config/parameters.json');
    game.state.start('run');
}

var run = {
    preload:function(game)
    {
    	 game.load.image('hulk', '../assets/hulk.png');
    },

    create:function(game)
    {
    	var hulk = game.add.sprite(game.world.width,game.world.centerY,'hulk');
    	game.add.tween(hulk).to({x:0}, 2000, Phaser.Easing.Bounce.Out,true);
    },

    update:function(game){ 

    },
}