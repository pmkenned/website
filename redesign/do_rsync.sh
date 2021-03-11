#!/usr/bin/env bash

DRY_RUN="--dry-run"
DELETE=

for var in "$@"
do
    if [ "$var" = "--wet" ]; then
        DRY_RUN=
    elif [ "$var" = "--delete" ]; then
        DELETE="--delete"
        printf "NOTE: will delete extraneous files on server\n"
    fi
done

if [ "$DRY_RUN" = "--dry-run" ]; then
    printf "NOTE: doing dry run (use --wet to not do dry run)\n"
fi


EXCLUDES=()
EXCLUDES+=(--exclude ".*")
EXCLUDES+=(--exclude do_rsync.sh)
EXCLUDES+=(--exclude README.md)
EXCLUDES+=(--exclude TODO.md)
EXCLUDES+=(--exclude NOTES.md)

rsync $DRY_RUN -avzh $DELETE --progress "${EXCLUDES[@]}" ./ paulkenn@paulmkennedy.com:~/www/redesign/

if [ "$1" != "--wet" ]; then
    printf "\nNOTE: this was just a dry run (use --wet to actually rsync)\n"
fi
