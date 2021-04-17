<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1\ListAssetsResponse\ListAssetsResult;

/**
 * The change in state of the asset.
 * When querying across two points in time this describes
 * the change between the two points: ADDED, REMOVED, or ACTIVE.
 * If there was no compare_duration supplied in the request the state change
 * will be: UNUSED
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.ListAssetsResponse.ListAssetsResult.StateChange</code>
 */
class StateChange
{
    /**
     * State change is unused, this is the canonical default for this enum.
     *
     * Generated from protobuf enum <code>UNUSED = 0;</code>
     */
    const UNUSED = 0;
    /**
     * Asset was added between the points in time.
     *
     * Generated from protobuf enum <code>ADDED = 1;</code>
     */
    const ADDED = 1;
    /**
     * Asset was removed between the points in time.
     *
     * Generated from protobuf enum <code>REMOVED = 2;</code>
     */
    const REMOVED = 2;
    /**
     * Asset was present at both point(s) in time.
     *
     * Generated from protobuf enum <code>ACTIVE = 3;</code>
     */
    const ACTIVE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StateChange::class, \Google\Cloud\SecurityCenter\V1\ListAssetsResponse_ListAssetsResult_StateChange::class);

