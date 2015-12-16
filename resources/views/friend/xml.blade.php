<rss version="2.0">
    <channel>

        @foreach($posts as $post)
        <item>
            <title> {{$post->title}} </title>
            <description>
                <![CDATA[  
                    <b> {{$post->authour->name}} - {{$post->updated_at}} </b>, 
                    <img src="{{$ip}}{{$post->thumb_url}}" style="float: left; border: 3px white solid; margin: 0px 10px 10px 0px;">
                    {{$post->content_raw}}
                ]]>
            </description>
        </item>
        @endforeach
                
    </channel>
</rss>
