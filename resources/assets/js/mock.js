import Mock from 'mockjs';

Mock.mock('/api/music/album',{
    'album': {
        'id': 1,
        'name':/[a-z][A-Z][0-9]/,
        'memo':'sssss'
    }
})
// 输出结果
// console.log(JSON.stringify(data, null, 4))

Mock.mock('/api/music/album_list',{
    'list|10-100':[{
        'id|+1':0,
        'name':/[a-z][A-Z][0-9]/,
        'img':'ddddd',
        'songs_list|10-20':[{
            'id|+1':0,
            'name':/[a-z][A-Z][0-9]/,
            'song_src':'sssss'
        }]
    }]
})

Mock.mock('/api/music/song');
Mock.mock('/api/music/song_lyric');
