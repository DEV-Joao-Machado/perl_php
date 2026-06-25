use strict;
use warnings;
use Socket;
use Sys::Hostname;

my $hostname = hostname();

my $ip = inet_ntoa(
    scalar gethostbyname($hostname)
);

print $ip;