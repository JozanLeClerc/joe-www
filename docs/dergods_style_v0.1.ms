.defcolor blue    rgb 0.1f 0.1f 1.0f
.defcolor bsdred  rgb #990000
.defcolor codered rgb #600000
.defcolor grey    rgb #aaaaaa
.defcolor black   rgb #000000
.color
.de bsdr
.gcolor bsdred
..
.de endc
.gcolor
..
.de xa
.XA \\$1
.ps 12p
.B "\m[bsdred]\\$2\m[]" \\$3 \\$4
..
.de b
.B "\m[bsdred]\\$1\m[]" \\$2 \\$3
..
.de code
.gcolor bsdred
.CW \\$1 \\$2 \\$3
.gcolor
..
.de nh1
.gcolor bsdred
.NH 1
.ps 14p
\\$1
.gcolor
..
.de nh2
.gcolor bsdred
.NH 2
.ps 13p
\\$1
.gcolor
..
.de bu
.IP \(bu 2
..
.
.
.
.
.nr PS 12p
.nr PO 1.0i
.nr LL 6.5i
.RP no
.P1
.ND
.
.
.
.
.gcolor black
.bsdr
.TL
.LG
.ps 17p
Dergods' Style and good practices for C/C++ projects
.endc
.AU
.ps 15p
Joe
.AI
42 Lyon Auvergne-Rhône-Alpes
.
.
.XS 1
.ps 12p
.b "1. Introduction"
.xa 1 "2. Projects and version control"
.xa 1 "	2.1 Directories"
.XE
.bsdr
.PX
.endc
.
.
.nh1 "Introduction"
.PP
The following is a description of
.b "Dergods' Style"
code and project
formatting to put in use if you work on Dergods' Realm-related code or if you
just need a personal good-looking norm to improve your code readablity. It
is heavily inspired by
.b FreeBSD® 's
.pdfhref W -D \
https://www.freebsd.org/cgi/man.cgi?query=style&apropos=0&sektion=0&\
manpath=FreeBSD+12.1-RELEASE+and+Ports&arch=default&format=html \
-A \m[black],\m[] \
\f(CW\m[codered]style(9)\m[]\f[]
.gcolor
with some changes.
.nh1 "Projects and version control"
.nh2 "Directories"
.RS
.bu
Working on a
.b program :
.RS
.bu
All
.b source
and
.b "header files"
should be in the
.code src/
directory.
.bu
Necessary
.b "media files"
such as images, sounds, fonts, etc... Necessary to the program execution
should be in the
.code media/
directory.
.bu
Compilation-generated
.b "object files"
should be located in the
.code obj/
directory.
.bu
.b Sub-programs
or
.b utilities
should be located in the
.code utils/
directory.
.bu
Optional
.b "man page(s)"
can be made for the project and its specularities and should be located in the
.code man/
directory.
.RE
.bu
Working on a
.b library :
.RS
.bu
All
.b "source files"
should be located in the
.code src/
directory.
.bu
Compilation-generated
.b "object files"
should be located in the
.code obj/
directory.
.bu
Non-optional
.b "man pages"
for every function intended to be used externally
should be located in the
.code man/
directory.
.bu
.b "Header files"
should be located in the
.code include/
directory.
.RE
.RE
