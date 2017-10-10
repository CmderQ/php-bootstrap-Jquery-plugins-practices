<?php
/**
 * Created by PhpStorm.
 * Filename:  index.php
 * User:      cmder
 * Date:      2017/10/10
 * Time:      15:46
 */
include_once './getid3/getid3.php';

$audioServerPath = './video/test.mp3';
$getid3 = new getID3();
$audioInfo = $getid3->analyze($audioServerPath);

var_dump($audioInfo);

# '结果显示如下：从中可以查看音频的大小，播放时间等等';
#
"
array (size=19)
  'GETID3_VERSION' => string '1.9.14-201709291043' (length=19)
  'filesize' => int 9263131
  'filepath' => string 'E:/svn/php/dev/www.test.com/GetID3/video' (length=40)
  'filename' => string 'test.mp3' (length=8)
  'filenamepath' => string 'E:/svn/php/dev/www.test.com/GetID3/video/test.mp3' (length=49)
  'avdataoffset' => int 150577
  'avdataend' => int 9263131
  'fileformat' => string 'mp3' (length=3)
  'audio' => 
    array (size=10)
      'dataformat' => string 'mp3' (length=3)
      'channels' => int 2
      'sample_rate' => int 44100
      'bitrate' => float 320036.658543577999807894229889
      'channelmode' => string 'stereo' (length=6)
      'bitrate_mode' => string 'vbr' (length=3)
      'lossless' => boolean false
      'encoder_options' => string 'VBR' (length=3)
      'compression_ratio' => float 0.226783346473623859118617929198
      'streams' => 
        array (size=1)
          0 => 
            array (size=9)
              ...
  'tags' => 
    array (size=1)
      'id3v2' => 
        array (size=7)
          'encoder_settings' => 
            array (size=1)
              ...
          'comment' => 
            array (size=1)
              ...
          'album' => 
            array (size=1)
              ...
          'title' => 
            array (size=1)
              ...
          'artist' => 
            array (size=1)
              ...
          'part_of_a_set' => 
            array (size=1)
              ...
          'track_number' => 
            array (size=1)
              ...
  'comments' => 
    array (size=1)
      'picture' => 
        array (size=1)
          0 => 
            array (size=7)
              ...
  'encoding' => string 'UTF-8' (length=5)
  'id3v2' => 
    array (size=18)
      'header' => boolean true
      'flags' => 
        array (size=3)
          'unsynch' => boolean false
          'exthead' => boolean false
          'experim' => boolean false
      'majorversion' => int 3
      'minorversion' => int 0
      'headerlength' => int 150577
      'tag_offset_start' => int 0
      'tag_offset_end' => int 150577
      'encoding' => string 'UTF-8' (length=5)
      'comments' => 
        array (size=7)
          'encoder_settings' => 
            array (size=1)
              ...
          'comment' => 
            array (size=1)
              ...
          'album' => 
            array (size=1)
              ...
          'title' => 
            array (size=1)
              ...
          'artist' => 
            array (size=1)
              ...
          'part_of_a_set' => 
            array (size=1)
              ...
          'track_number' => 
            array (size=1)
              ...
      'TSSE' => 
        array (size=1)
          0 => 
            array (size=10)
              ...
      'COMM' => 
        array (size=1)
          0 => 
            array (size=13)
              ...
      'TALB' => 
        array (size=1)
          0 => 
            array (size=10)
              ...
      'TIT2' => 
        array (size=1)
          0 => 
            array (size=10)
              ...
      'TPE1' => 
        array (size=1)
          0 => 
            array (size=10)
              ...
      'TPOS' => 
        array (size=1)
          0 => 
            array (size=10)
              ...
      'TRCK' => 
        array (size=1)
          0 => 
            array (size=10)
              ...
      'APIC' => 
        array (size=1)
          0 => 
            array (size=17)
              ...
      'padding' => 
        array (size=3)
          'start' => int 149553
          'length' => int 1024
          'valid' => boolean true
  'mime_type' => string 'audio/mpeg' (length=10)
  'mpeg' => 
    array (size=1)
      'audio' => 
        array (size=23)
          'raw' => 
            array (size=13)
              ...
          'version' => string '1' (length=1)
          'layer' => int 3
          'channelmode' => string 'stereo' (length=6)
          'channels' => int 2
          'sample_rate' => int 44100
          'protection' => boolean false
          'private' => boolean false
          'modeextension' => string '' (length=0)
          'copyright' => boolean false
          'original' => boolean false
          'emphasis' => string 'none' (length=4)
          'padding' => boolean false
          'bitrate' => float 320036.658543577999807894229889
          'framelength' => float 1045
          'bitrate_mode' => string 'vbr' (length=3)
          'VBR_method' => string 'Xing' (length=4)
          'xing_flags_raw' => int 7
          'xing_flags' => 
            array (size=4)
              ...
          'VBR_frames' => int 8720
          'VBR_bytes' => int 9112554
          'toc' => 
            array (size=100)
              ...
          'VBR_bitrate' => float 320036.658543577999807894229889
  'playtime_seconds' => float 227.787755102040790688988636248
  'tags_html' => 
    array (size=1)
      'id3v2' => 
        array (size=7)
          'encoder_settings' => 
            array (size=1)
              ...
          'comment' => 
            array (size=1)
              ...
          'album' => 
            array (size=1)
              ...
          'title' => 
            array (size=1)
              ...
          'artist' => 
            array (size=1)
              ...
          'part_of_a_set' => 
            array (size=1)
              ...
          'track_number' => 
            array (size=1)
              ...
  'bitrate' => float 320036.658543577999807894229889
  'playtime_string' => string '3:48' (length=4)
";
