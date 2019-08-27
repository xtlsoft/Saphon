# Concept of Saphon

[TOC]

## Overview

Saphon is a wonderful, powerful server developing framework for PHP.

## Architecture

Saphon doesn’t follow MVC, MVVM or other things. It focuses on server development.

Look at this graph:

```mermaid
graph TD;
User{User};
subgraph "Protocol Layer"
    Connector[Connector - protocol interface];
    subgraph "Connector Middlewares"
        _cm1("middleware 1");
        _cm2("middleware 2");
        _cm1-->_cm2;
    end
    Connector-->_cm1;
end
User===Connector;
Dispatcher[Dispatcher - service router];
_cm2-->Dispatcher;
subgraph Pipeline
    Provider(Provider - Data Accessor);
    Logic(Logic);
    subgraph "Present Middlewares"
        _pm1("middleware 1");
        _pm2("middleware 2");
        _pm1-->_pm2;
    end
    Presenter(Presenter);
    LogicAfter(Logic - Queued);
    Provider-->Logic;
    Logic-->_pm1;
    _pm2-->Presenter;
    Presenter-->LogicAfter;
end
Dispatcher-->Provider;
Presenter-->Connector;
StaticObjectCache["StaticObjectCache"] --- Dispatcher;
subgraph "Data Layer"
    Driver["DB Driver"];
    QueueCache["Queued Cache"];
    InternalProcessor["InternalProcessor"];
    InternalProcessor---QueueCache;
    QueryBuilder["QueryBuilder"];
    QueryCombiner["QueryCombiner"];
    Models("Models");
    Executor["Executor"];
    Models-->QueryBuilder;
    QueryBuilder-->QueryCombiner;
    QueryCombiner-->Executor;
    Executor---QueueCache;
    Driver---Executor;
end
Models---Provider;
```

### Request Abstraction

A request is abstracted to a `Message`, a connection or a couple of requests are abstracted to a `Session`.

Several `Message`s can be combined to a `MessageCollection`.

There’s `SessionCollection` as well.
